<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Librarian ;
class LoginController extends Controller
{


    public function login(Request $request)
    { 
            //dd($request);
        $credentials = $request->only('email', 'password');
        //dd( $credentials);
        if (Auth::attempt($credentials)) {
            dd( $credentials);
            return redirect()->intended('/livre'); 
        }

   
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
