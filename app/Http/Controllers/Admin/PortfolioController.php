<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    //
    private $portfolioService;
    private $memberService;
    
    public function __construct(\App\Services\PortfolioService $portfolioService,
    \App\Services\MemberService $memberService) {
        $this->portfolioService = $portfolioService;
        $this->memberService = $memberService;
    }
    
    public function showMemberPortfolios($memberId){
        $member = $this->memberService->getMemberById($memberId);
        if($member == null){
            return redirect()->back()->with('error', 'specified member not found');
        }
        
        $portfolios = $this->portfolioService->getAllPortfoliosForAMember($member);
        if($portfolios == null){
            return redirect()->back()->with('error', 'could not retrieve portfolios');
        }
        
        return view('admin.singlememberportfolio')->with('portfolios', $portfolios);
    }
}
