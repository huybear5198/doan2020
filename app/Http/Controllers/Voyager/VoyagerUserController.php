<?php

namespace App\Http\Controllers\Voyager;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerUserController as BaseVoyagerUserController;
use Illuminate\Support\Facades\Hash;
use App\User;

class VoyagerUserController extends BaseVoyagerUserController
{	
    public function getRegister(){
		return view('vendor.voyager.register');
	}
	public function postRegister(Request $req){
    	$validate = $this->validate($req,
    	[
    		'name'=>'required|min:8',
    		'email'=>'required|email|unique:users',
    		//'password'=>'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/', //regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|
    		'repassword'=>'required|same:password',
            'agree-term'=>'required'
    	],

    	[
    		'name.required'=>'Vui lòng nhập Họ tên',
    		'name.min'=>'Họ tên phải có ít nhất 8 ký tự',
    		'email.required'=>'Vui lòng nhập Email',
    		'email.email'=>'Vui lòng điền đúng email',
    		'password.required'=>'Vui lòng nhập Mật khẩu',
    		'password.min'=>'Mật khẩu phải có ít nhất 8 ký tự',
    		'password.regex'=>'Mật khẩu phải có ít nhất 1 ký tự đặc biết',
    		'repassword.required'=>'Vui lòng nhập lại Mật khẩu',
    		'repassword.same'=>'Mật khẩu không giống nhau',
            'agree-term.required'=>'Vui lòng đọc Điều khoản'
    	]

    );
    	$user = new User;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
    	$user->role_id = 2;
    	$user->save();
        return redirect()->route('voyager.login');
    }
}
