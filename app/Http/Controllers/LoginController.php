<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index(){
		return view('admin.login_form');
	}

	public function login(Request $request){
		if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {

			return redirect()->route('admin.dashboard');
		}
	}
}
