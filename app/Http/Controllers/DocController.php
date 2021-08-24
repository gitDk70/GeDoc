<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocController extends Controller
{
    public function home(){
        return view('home');
      }

    public function personal() {
        return view('personal');
    }  

    public function work() {
        return view('work');
    }
  
    public function about(){
      return view('about');
    }
    
        
    public function contact(){
      return view('contact');
    }
    
    public function contactForm() {
    
    }
}
