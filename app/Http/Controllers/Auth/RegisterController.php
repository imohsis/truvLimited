<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $memberService;
    protected $portfolioService;
    protected $schemeService;
    protected $startingClassService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(\App\Services\MemberService $memberService,
    \App\Services\PortfolioService $portfolioService, \App\Services\SchemeService
            $schemeService, \App\Services\StartingClassService $startingClassService)
    {
        $this->middleware('guest');
        $this->memberService = $memberService;
        $this->portfolioService = $portfolioService;
        $this->schemeService = $schemeService;
        $this->startingClassService = $startingClassService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'schemeId' => 'required',
            'startingClassId' => 'required',
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $scheme = $this->schemeService->getSchemeById($data['schemeId']);
        $startingClass = $this->startingClassService->getStartingClassById($data['startingClassId']);
        if($scheme == null || $startingClass == null){
            return null;
        }
        DB::beginTransaction();
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        
        if($user != null){
            $member = $this->memberService->createMember($data['name'], $data['phone'], 
                    $data['email'], $data['location'], false, false, $user->id);
            
            if($member != null){
                $portfolio = $this->portfolioService->createPortfolio($member->id,
                        $data['schemeId'], $data['startingClassId'], $data['stageId']);
                if($portfolio != null){
                    DB::commit();
                    return $user;
                }
            }
        }
        DB::rollback();
        return null;
    }
}
