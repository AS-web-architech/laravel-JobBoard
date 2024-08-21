<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Auth.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validation
         $request->validate([
            'name'=>['required'],
            'email'=>['required','unique:users,email'],
            'password'=>['required',Password::min(6), 'confirmed'],
            'userRole' => ['required', Rule::in(['jobSeeker', 'employer'])],    
        ]);
        //
        $user=User::create([
          'name' => request('name'),
          'email' => request('email'),
          'password' => request('password'),
          'confirmPass' => request('confirm_password'),
          'user_role' => request('userRole'),
        ]);
        
        // dd($data);
        Auth::login($user);
        //set with message
        $message = 'congratulations you are logged in';
        return redirect()->route('homePage')->with('message', $message);
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
    public function destroy(string $id)
    {
        //
    }
}
