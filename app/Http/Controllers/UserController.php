<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.create-user');   
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
        $request->validate([
            'name'=>['required'],
            'email'=>['required','unique:users,email'],
            'password'=>['required',Password::min(8)
                                             ->mixedcase()
                                             ->numbers()
                                             ->symbols(),
                                             
                                             
             ],
            'userRole'=>['required'],
        ]);
        User::create([
          'name' => request('name'),
          'email' => request('email'),
          'password' => request('password'),
          'confirmPass' => request('confirm_password'),
          'user_role' => request('userRole'),
        ]);
        

        return redirect()->route('users.index')->with('success','User has been created successfully');
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
