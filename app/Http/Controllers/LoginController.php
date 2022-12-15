<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials =  $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'student'){
                return redirect('/dashboard_user');
            } elseif(Auth::user()->role == 'admin'){
                return redirect('/dashboard_admin');
            } elseif(Auth::user()->lecture->lecture_role == 'head_of_labs'){
                return redirect('/dashboard_kalab');
            } elseif(Auth::user()->lecture->lecture_role == 'examiner'){
                return redirect('/dashboard_dospeng');
            } else{
                return redirect('/dashboard_lecture');
            }
        }
        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
