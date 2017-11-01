<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function showDashboard(){
        if(auth()->user()->role_id == \App\UserRole::$ADMINISTRATOR 
                || auth()->user()->role_id == \App\UserRole::$COORDINATOR || auth()->user()->role_id == \App\UserRole::$GUEST){
           return redirect('/admin');
        }
       
        return redirect('/member');
    }
    
    
}
