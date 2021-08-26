<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index()
    {
      return vew('login');
    }

  

    
    public function login(Request $request)
    {
        //
    }

    
    
    public function register()
    {
        return view('register');
    }

   
}
