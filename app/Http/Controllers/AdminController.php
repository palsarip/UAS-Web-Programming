<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    function index(){
        if(Auth::check()){
            return redirect('admin/dashboard');
        }else{
            return view('admin.index');
        }
    }
    
    function dashboard(){
        if(Auth::check()){
            return view('admin/dashboard');
        }else{
            return redirect('admin')->with('errors', "You must be logged in to access this page");
        }
    }

    function login(Request $request){
        Session::flash('username', $request->username);
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required'
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('admin/dashboard')->with('success', 'Login successful');
        } else {
            return back()->with('errors', 'Username or password is incorrect');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('admin')->with('success', 'Logout successful');
    }
}

