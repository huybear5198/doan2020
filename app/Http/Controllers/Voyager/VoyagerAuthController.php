<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerAuthController as BaseVoyagerAuthController;
use Illuminate\Http\Request;

class VoyagerAuthController extends BaseVoyagerAuthController
{
    protected function validateLogin(Request $request)
    {
    	$request->validate([
    		$this->username() => 'required|string',
    		'password' => 'required|string',
    		'g-recaptcha-response' => 'required|captcha'
		],
		[
    		'email.required'=>'Vui lòng nhập email',
    		'password.required'=>'Vui lòng nhập Mật khẩu',
    		'g-recaptcha-response.required'=>'Vui lòng chọn captcha',
    	]);
    }
}
