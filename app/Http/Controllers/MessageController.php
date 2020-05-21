<?php

namespace App\Http\Controllers;

use App\User;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;
class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sender = DB::table('messages')->where('to',Auth::id())->pluck('from')->unique();
        $receiver = DB::table('messages')->where('from',Auth::id())->pluck('to')->unique();
        $all = $sender->concat($receiver)->unique()->reject(function($value,$key) {
            return $value == Auth::id();
        })->values()->toArray();
        $users = DB::table('users')
                                ->leftJoin('messages',function($join){
                                    $join->on('users.id','=','messages.from')
                                        ->where('is_read','=',0);
                                })
                                ->select('users.id','users.name','users.avatar','users.email', DB::raw('count(is_read) AS `unread`'))
                                ->whereIn('users.id',$all)
                                ->groupBy('users.id','users.name','users.avatar','users.email',`unread`)
                                ->get();
        return view('general.message', ['users' => $users]);
    }

    public function createMessage($user_id)
    {
        $user = DB::table('users')->select('users.id','users.name','users.avatar','users.email')
                                ->where('users.id','=',$user_id)
                                ->get();
        return $user;
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('general.messages_content', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
