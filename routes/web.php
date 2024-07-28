<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view
    ('home', [
        'name' => 'Areeba',
        'greeting' => 'Welcome To Home Page'
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/signIn', function () {
    return view('User.signIn');
});
// User Routes
Route::resource('/users', UserController::class);//index route
Route::resource('/users', UserController::class);//resorce route

Route::get('/jobs', function () {
    return view('jobs.index', [
        'job' => Job::all()
    ]);
});
Route::get('/jobs/create', function(){
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    
        
    $job = Job::find($id);
    // dd($job);
    return view('job', ['job'=> $job]);
    // return view('job');

            
            

});

