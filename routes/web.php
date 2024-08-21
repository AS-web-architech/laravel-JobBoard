<?php

use App\Http\Controllers\dashboard\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

use App\Http\Controllers\UserController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;

// view pages
Route::get('/',[viewController::class,'home'])->name('homePage');
Route::get('/about',[viewController::class,'about'])->name('aboutPage');
Route::get('/contact',[viewController::class,'contact'])->name('contactPage');

//User Authentication

    //user Registration
      Route::get('/create',[RegisterController::class , 'create'])->name('create.user');
      Route::post('/create',[RegisterController::class , 'store'])->name('user.store');
       
    //user login
      Route::get('/login',[loginController::class , 'index'])->name('loginPage');
      Route::post('/login',[loginController::class , 'store'])->name('user.login');
      Route::post('/logout',[loginController::class , 'destroy'])->name('user.logout');
 //Dashboard
 Route::get('/dashboard',[HomeController::class , 'index'])->name('user.dashboard');  

//jobs Route   
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

