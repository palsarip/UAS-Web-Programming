<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Reservation;
use App\Models\History;
use Illuminate\Routing\Route;

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
            $reservations = Reservation::all();
            return view('admin/dashboard')->with('reservations', $reservations);
            return view('admin/dashboard');
        }else{
            return redirect('admin')->with('errors', "You must be logged in to access this page");
        }
    }

    function reservations(){
        if(Auth::check()){
            $reservations = Reservation::all();
            return view('admin/reservations')->with('reservations', $reservations);
            return view('admin/reservations');
        }else{
            return redirect('admin')->with('errors', "You must be logged in to access this page");
        }
    }

    function checks(){
        if(Auth::check()){
            $reservations = Reservation::all();
            return view('admin/checks')->with('reservations', $reservations);
            return view('admin/checks');
        }else{
            return redirect('admin')->with('errors', "You must be logged in to access this page");
        }
    }

    function history(){
        if(Auth::check()){
            $history = History::all();
            return view('admin/history')->with('history', $history);
            return view('admin/history');
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
            return redirect('admin/dashboard')->with('success', 'Welcome, ' . Auth::user()->name);
        } else {
            return back()->with('errors', 'Username or password is incorrect');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('admin')->with('success', 'Logout successful');
    }

    function approved($id){
        $reservation = Reservation::find($id);
        $reservation->status = 1;
        $reservation->save();
        return redirect('admin/reservations')->with('success', 'Reservation from' . $reservation->nama . ' has been approved');
    }

    function rejected($id){
        $reservation = Reservation::find($id);
        $reservation->status = 2;
        $reservation->save();
        return redirect('admin/reservations')->with('success', 'Reservation from' . $reservation->nama . ' has been rejected');
    }

    function destroy($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect(Route::current())->with('success', 'Reservation from' . $reservation->nama . ' has been deleted');
    }
}

