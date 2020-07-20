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

	public function login (Request $request){

		if (Auth::attempt(['email' => $request->email,'password' => $request->password])) {

			return redirect()->route('admin.dashboard');
		}
		return redirect()->back()->withInput($request->all());	
	}
	public function logout(){
		Auth::logout();
		Session()->flash('success','Logout Successfully ');
		return redirect()->route('user.login');
	}

}