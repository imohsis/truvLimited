<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/landing', function() {
    return view('landing');
});

Route::get('/signup', function(){
    return redirect('/registration');
});

Route::get('/registration', function(){
    return view('register');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/houseownershipsignup', function(){
    return view('houseOwnershipSignup');
});

Route::get('/kekeownershipsignup', function(){
   return view('kekeOwnershipSignup'); 
});

Route::get('/bikeownershipsignup', function(){
    return view('bikeOwnershipSignup');
});