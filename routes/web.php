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

Route::get('/member', function(){
    return view('member.index');
    
});

Route::get('/network', function(){
    return view('member.network');
});

Route::get('/portfolio', function(){
   return view('member.portfolio'); 
});

Route::get('/changepassword', function(){
   return view('member.changepassword'); 
});


Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/admin/singlemember', function(){
    return view('admin.singlemember');
});

Route::get('/admin/singlememberportfolio', function(){
    return view('admin.singlememberportfolio');
});

Route::get('/admin/changepassword', function(){
    return view('admin.changepassword');
});

Route::get('/admin/allmembers', function(){
    return view('admin.allmembers');
});