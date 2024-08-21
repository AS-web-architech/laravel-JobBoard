<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home', [
                'name' => 'Areeba',
                'greeting' => 'Welcome To Home Page'
            ]);  
    }
    public function about(){
        return view('about');     
    }
    public function contact(){
        return view('contact');
    }
   
}
