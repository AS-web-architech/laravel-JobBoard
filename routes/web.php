<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
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
Route::get('/jobs', function () {
    return view('jobs', [
        'job' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    
        
    $job = Job::find($id);
    // dd($job);
    return view('job', ['job'=> $job]);
    // return view('job');

            
            

});

