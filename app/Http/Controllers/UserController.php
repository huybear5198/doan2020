<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Captcha;
use App\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function getLogin(){
		return view('auth.login');
	}
    public function postLogin(Request $req){
	    $rule = array(
	        'email'=>'required|email',
	        'password'=>'required',
	        'g-recaptcha-response'=>new Captcha(),            
	    );

	    $mess = array(
	        'email.required'=>'Please enter email',
	        'email.email'=>'Enter incorrect email format',
	        'password.required'=>'Please enter password',
	    );

	    $validator = Validator::make($req->only(['email','password']), $rule, $mess);
	    if ($validator->fails()) {
	        return redirect('login')->withErrors($validator);
	    }
	    if(Auth::attempt( ['email'=>$req->email, 'password'=>$req->password] ))
	    {//ko lấy được email, password để kiểm tra
	        if(Auth::user()->status==1 || Auth::user()->status==null){
	            if(Auth::user()->role_id==2||Auth::user()->role_id==null){
	                return redirect(route('index'));
	            }
	            else
	            {
	                return redirect(route('admin'));
	            }               
	        }
	        else{
	            return redirect('login')->with('noti','Người dùng không tồn tại');
	        }

	    }
	    else
	    {     
	        return redirect('login')->with('noti','Đăng nhập thất bại');
	    }
	}
	
	public function getRegister(){
		return view('auth.register');
	}

    public function postRegister(Request $req){
    	$validate = $this->validate($req,
    	[
    		'name'=>'required|min:8|unique:users',
    		'email'=>'required|email|unique:users',
    		'password'=>'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/', //regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|
    		'repassword'=>'required|same:password',
            'g-recaptcha-response'=>new Captcha(),
    	],

    	[
    		'name.required'=>'Please Enter Your Name',
    		'name.min'=>'Name Must Contain At Least 8 Characters',
    		'name.unique'=>'Name Must Contain At Least 8 Characters', 
    		//'name.regex'=>'Name không được chứa ký tự đặc biệt',
    		'email.required'=>'Please Enter Your Email',
    		'email.email'=>'Please Enter The Correct Email Format',
    		'password.required'=>'Please Enter Password',
    		'password.min'=>'Password Must Contain At Least 8 Characters',
    		'password.regex'=>'Password Must Contain At Least 1 Special Character',
    		'repassword.required'=>'Please Confirm The Password',
    		'repassword.same'=>'Password Entered Is Not The Same',
            //'role_id.required'=>'Vui lòng chọn role',
    	]

    );
    	$user = new user;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
        //$user->role_id = $req->role_id;
    	$user->save();
        return redirect::to('login')->with('success','Đăng ký thành công');
	}
}
