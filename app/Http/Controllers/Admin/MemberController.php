<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Member;
use DB;
use PDF;
use Excel;
class MemberController extends Controller
{
    //
    private $memberService;
    
    
    public function __construct(\App\Services\MemberService $memberService) {
        $this->memberService = $memberService;
        
    }


    public function export(){
        $items = Portfolio::
            select('Members.full_name','Portfolios.portfolio_code','Schemes.description as scheme','Portfolios.stage_id as No_of_referrals','Members.email','Members.phone','Members.location')
            ->join('Members','Portfolios.member_id','=','Members.id')
            ->join('Schemes','Portfolios.scheme_id','=','Schemes.id')
            ->where('Members.approved_status', true)
            ->orderBy('Members.created_at','desc')
            ->get();

       // return $items;
       Excel::create('items', function($excel) use($items) {
            $excel->sheet('ExportFile', function($sheet) use($items) {
                $sheet->fromArray($items);
            });
        })->export('xls');

    }


    
    public function index(){
        $member_portfolios = Portfolio::select('Members.id','Members.full_name','Portfolios.portfolio_code','Portfolios.stage_id','levels.description','levels.amount','Portfolios.scheme_id','Members.email','Members.phone','Members.location')
                                          ->join('Members','Portfolios.member_id','=','Members.id')
                                          ->join('levels','Portfolios.scheme_id','=','levels.id')
                                          ->where('Members.approved_status', true)
                                          ->orderBy('Members.created_at','desc')
                                           ->paginate('15');


         //$portfolios = Portfolio::all();
        // dd($member_portfolios);
         //dd($this->memberService->getAllApprovedAndReviewedMembers());
        return view('admin.allmembers')
                ->with('members', $member_portfolios);
    }
    
    public function show($id, $code){
        $member = $this->memberService->getMemberById($id, $code);

        //return $member->full_name;
        return view('admin.singlemember')->with('member', $member);
    }


    public function updateMember(Request $request){

        $member = \App\Portfolio::find($request->portfolioId);
        $member->teller_id = $request->tellerId;
        $member->transaction_id = $request->transactionId;
        $member->save();

        return redirect()->back()->with('success', 'Account successfully updated');

    }


    
    /**
     * 
     * This method is responsible for accepting requests to approve a member.
     * 
     * @param Request $request
     * 
     */
    public function approveMember(Request $request){
        $this->validate($request, [
            'id' => 'required',
            
        ]);
        
        $member = $this->memberService->getMemberById($request['id']);
        if($member == null){
            return redirect()->back()->with('error', 'member does not exist');
        }
        $fullNameArray = explode(" ", $member->full_name);
        $lastName = count($fullNameArray >= 2) ? $fullNameArray[(count($fullNameArray) - 1)] : $member->full_name;
        if($this->memberService->approveMember($member, auth()->user()->id, $lastName."111") != null){
            return redirect()->back()->with('success', 'member approved successfully');
        }
        
        return redirect()->back()->with('error', 'could not approve member');
    }
    
    /**
     * 
     * This method is responsible for handling Http requests to disapprove a
     * member.
     * 
     * @param Request $request | the request to create.
     * 
     * @return type
     * 
     */
    public function disapproveMember(Request $request){
        $this->validate($request, [
            'id' =>'required'
        ]);
        
        $member = $this->memberService->getMemberById($request['id']);
        if($member == null){
            return redirect()->back()->with('error', 'member does not exist');
        }
        
        if($this->memberService->disapproveMember($member, auth()->user()->id)){
            return redirect()->back()->with('success', 'member disapproval successful');
        }
        
        return redirect()->back()->with('error', 'could not disapprove member');
    }
}
