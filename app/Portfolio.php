<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    private $table = 'Portfolios';
    
    private $fillable = [
        'member_id', 'scheme_id', 'starting_class_id', 'stage_id'
    ];
}
