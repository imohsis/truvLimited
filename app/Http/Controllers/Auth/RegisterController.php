<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
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
    public function __construct(\App\Services\MemberService $memberService, \App\Services\PortfolioService $portfolioService, \App\Services\SchemeService
    $schemeService, \App\Services\StartingClassService $startingClassService) {
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
    protected function validator(array $data) {

        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6',
                    'schemeId' => 'required',
                    'startingClassId' => 'required',
                    'day' => 'required|numeric|min:1',
                    'month' => 'required|numeric|min:1',
                    'year' => 'required|numeric|min:1900',
                    'phone' => 'required|numeric'
        ]);
    }

    /**
     * 
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function register(\Illuminate\Http\Request $request) {

        if (!$this->confirmSchemeAndStartingClassValidity($request['schemeId'], $request['startingClassId'])) {
            return redirect()->back()->with('error', 'invalid scheme id or starting class id');
        }
        
        if($request['tellerId'] == null && $request['transactionId'] == null){ 
            return redirect()->back()->with('error', 'you must enter either teller id or transaction id');
        }
        
        $referalId = 0;
        if ($request['referalId'] != null) {
            $referalId = $this->determineReferal($request['referalId']);
            if ($referalId == null) {
                return redirect()->back()->with('error', 'invalid referral code');
            }
        }
        $request['referalId'] = $referalId;
        $this->validator($request->all())->validate();
        event(new \Illuminate\Auth\Events\Registered($user = $this->create($request->all())));
        
        return $this->registered($request, $user) ?: redirect($this->redirectPath());
    }

    /**
     * 
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        return $this->createUserWithCorrespondingData($data, $data['referalId']);
    }

    /**
     * 
     * This method encapsulates the processes involved in creating the necessary
     * things needed to complete the registration process.
     * 
     * @param array $data | an array containing form input.
     * @param type $referalId | the referalId for the member.
     * 
     * @return User
     * 
     */
    private function createUserWithCorrespondingData(array $data, $referalId) {
        \Illuminate\Support\Facades\DB::beginTransaction();

        $dateOfBirth = \Carbon\Carbon::create($data['year'], $data['month'], $data['day']);
        $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'role_id' => \App\UserRole::$MEMBER,
        ]);

        if ($user != null) {
            $member = $this->memberService->createMember($data['name'], $data['phone'], 
                    $data['email'], $data['location'], $dateOfBirth, $data['gender'],
                    $data['tellerId'], $data['transactionId'], false, false, $user->id, $referalId);

            if ($member != null) {
                $portfolio = $this->portfolioService->createPortfolio($member->id, $data['schemeId'], $data['startingClassId'], 0);
                if ($portfolio != null) {
                    \Illuminate\Support\Facades\DB::commit();
                    session(['success' => true, 'scheme' => $data['schemeId'],
                        'startingClass' => $data['startingClassId']]);
                    return $user;
                }
            }
        }

        \Illuminate\Support\Facades\DB::rollback();
        return null;
    }

    /**
     * 
     * This method encapsulates the process involved in confirming the validity
     * of the scheme and startingClassId submitted while trying to register a 
     * Member.
     * 
     * @param type $schemeId | the id of the scheme in question.
     * @param type $startingClassId | the id of the class in question.
     * 
     * @return type
     * 
     */
    private function confirmSchemeAndStartingClassValidity($schemeId, $startingClassId) {
        $scheme = $this->schemeService->confirmSchemeValidity($schemeId);
        $startingClass = $this->startingClassService->confirmStartingClassValidity($startingClassId);
        return ($scheme != null || $startingClass != null);
    }

    /**
     * 
     * This method encapsulates the process involved in determining the referal 
     * id to be associated with the registering member's account.
     * 
     * @param type $referalId | the referalId in question.
     * 
     * @return int
     * 
     */
    private function determineReferal($referalId) {
        if ($referalId != null) {
            $member = $this->memberService->getMemberByMemberId($referalId);
            return ($member == null) ? null : $member->id;
        }
        return null;
    }

}
