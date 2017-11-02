<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Portfolio;

class IndexController extends Controller
{
    //
    private $memberService;
    private $portfolioService;
    
    public function __construct(\App\Services\MemberService $memberService,
    \App\Services\PortfolioService $portfolioService) {
        $this->memberService = $memberService;
        $this->portfolioService = $portfolioService;
    }
    
    public function show(){
        $awaitingPortfolios = $this->portfolioService->getAllUnReviewedPortfolios();
        return view('admin.index')
                ->with('awaitingPortfolios', $awaitingPortfolios);
    }

    public function export(){
        $items = Portfolio::select('Members.full_name','Portfolios.portfolio_code','Schemes.description','Members.email','Members.phone','Members.location')
            ->join('Members','Portfolios.member_id','=','Members.id')
            ->join('Schemes','Portfolios.scheme_id','=','Schemes.id')
            ->where('Members.approved_status', false)
            ->orderBy('Members.created_at','desc')
            ->get();

        return $items;

        /*Excel::create('items', function($excel) use($items) {
            $excel->sheet('ExportFile', function($sheet) use($items) {
                $sheet->fromArray($items);
            });
        })->export('xls');*/

    }
}
