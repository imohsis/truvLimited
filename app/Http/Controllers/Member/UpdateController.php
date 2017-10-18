<?php
/**
 * Created by PhpStorm.
 * User: ThinkShifts
 * Date: 17/10/2017
 * Time: 19:13
 */

namespace App\Http\Controllers\Member;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Session\SessionManager;
use App\User;

class UpdateController extends Controller
{

    public function index(Request $request){

       // dd(auth()->user()->id);
        $data = [
            'full_name' => $request->fullName,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'date_of_birth' => $request->birthDate,
        'location' => $request->address,
         'account_name' =>  $request->accname,
        'account_no' => $request->accno
        ];

     $member = Member::where('user_id','=',auth()->user()->id )->update($data);

     $user = User::where('id','=',auth()->user()->id)->update(['name' =>$request->fullName]);

   // dd($member);



      \Session::flash('success','Successfully updated your profile');
      return redirect('/member');

    }

}