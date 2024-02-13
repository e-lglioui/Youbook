<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = $this->getUser($email);
    
        if ($user && password_verify($password, $user->password)) {
            Auth::login($user);
    
            return redirect()->intended('/livre'); 
        }
    
        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }
    

    private function getUser($email)
    {
        $student = \App\Models\Student::where('email', $email)->first();
        $librarian = \App\Models\Librarian::where('email', $email)->first();
    
        return $student ?: $librarian;
    }
    

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
