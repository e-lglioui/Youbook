<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    //if (Auth::check()) {
    // $user = Auth::user();

    // if ($user instanceof \App\Models\Student) {
  
    // } elseif ($user instanceof \App\Models\Librarian) {
 
    // }
//}

    
}
