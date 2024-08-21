<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $user=$request->validate([
            'email'=>['required'],
            'password'=>['required'],
        ]);
        //Attempt to login
        Auth::attempt($user);
        // dd(Auth::check());
        if(!Auth::attempt($user)){
             throw ValidationException::withMessages([
                'email' => 'sorry those credentials do not match'
             ]) ;
            
        }
        
            //regenerate the session token
            $request->session()->regenerate();
            //redirect
            return redirect()->route('homePage')->with('message','congratulation you are logged in');
        
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
     
       // dd('log the user out');
       Auth::logout();
       return redirect()->route('homePage')->with('message','your session has been expired');
    }
}
