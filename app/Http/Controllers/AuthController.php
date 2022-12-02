<?php namespace App\Http\Controllers;
 
 use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
 
class AuthController extends Controller {
 

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $admin = new Admin();
        {
           if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
               return redirect()->intended('admin');
           }
        }
    }
 
}