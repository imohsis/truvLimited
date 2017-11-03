<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Member;
use App\Schemes;
use App\Levels;


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

        //return $id;

        $network = \App\Portfolio::select('Portfolios.id', 'Portfolios.member_id','Portfolios.portfolio_code', 'Levels.description', 'Levels.amount','Schemes.description as schemeName')
            ->join('Levels','Portfolios.starting_class_id','=','Levels.id')
            ->join('Schemes','Portfolios.scheme_id','=','Schemes.id')
            ->where('refered_by', '=', $id)
            ->where('approved_status', '=', 1)
            ->paginate();

        $name = Member::select('full_name')
                ->where('id', '=', $id)
                ->get();



        //return $network;

     return view('admin.network')
          ->with('portfolios', $network)
          ->with('name', $name);

   }
}