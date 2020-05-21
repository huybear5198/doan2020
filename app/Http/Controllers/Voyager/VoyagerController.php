<?php

namespace App\Http\Controllers\Voyager;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerController as BaseVoyagerController;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;

class VoyagerController extends BaseVoyagerController
{
    public function index()
    {
        $menu = DB::select('select * from menu_items where menu_id=2');
        if(Auth::user()->role_id == 1){
            return Voyager::view('voyager::index');
        }else{
            return view('user.index',['menu' => $menu]);
        }
    }
}
