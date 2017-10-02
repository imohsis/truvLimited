<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table = 'Portfolios';
    
    protected $fillable = [
        'member_id', 'scheme_id', 'starting_class_id', 'stage_id'
    ];
}
