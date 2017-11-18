<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Member extends Model
{
    //
    use Notifiable;
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'members.full_name' => 10,
            'members.email' => 10,
            'members.phone' => 10,
        ]
    ];

    protected $table = 'Members';

    protected $fillable = [
      'member_id', 'full_name', 'phone', 'email', 'location',
      'date_of_birth', 'gender', 'teller_id', 'transaction_id',
      'approved_status', 'reviewed_status', 'user_id', 'refered_by'
    ];
    
    public function user(){
        return User::find($this->user_id);
    }


    public function countReferrals($id){

        return Portfolio::where('refered_by','=', $id)
                         ->where('approved_status','=', 1)
                              ->count();
    }

}
