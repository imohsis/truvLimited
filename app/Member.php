<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    private $table = 'Members';
    
    private $fillable = [
      'member_id', 'full_name', 'phone', 'email', 'location', 'approved_status', 
        'reviewed_status', 'user_id'
    ];
}
