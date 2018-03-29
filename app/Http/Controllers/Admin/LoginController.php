<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\LoginAdminRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(LoginAdminRequest $req)
    {
    	$login = [
    		'email' => $req->email,
    		'password' => $req->password,
    		'role' => 1,
    	];
    	// dd($login);
    	if (Auth::attempt($login)) {
    		return redirect()->route('admin-home');
    	}else {
    		return redirect()->back()->with('message', 'Email hoặc mật khẩu không đúng');
    	}

    }

    public function logOut()
    {
    	Auth::logout();
    	return redirect()->route('admin-login');
    }
}
