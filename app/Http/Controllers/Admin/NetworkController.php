<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Member;


class NetworkController extends Controller
{

    //
    private $portfolioService;
    private $referralService;
    private $memberService;

    public function __construct(\App\Services\PortfolioService $portfolioService,
                                \App\Services\ReferralService $referralService, \App\Services\MemberService $memberService) {
        $this->portfolioService = $portfolioService;
        $this->referralService = $referralService;
        $this->memberService = $memberService;
    }

    public function show($id){

        $network = \App\Portfolio::where('refered_by', '=', $id)
            ->where('approved_status', '=', 1)->paginate();

        $name = Member::select('full_name')
                ->where('id', '=', $id)
                ->get();




      return view('admin.network')
          ->with('portfolios', $network)
          ->with('name', $name);

   }
}