<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    private $memberService;
    
    public function __construct(\App\Services\MemberService $memberService) {
        $this->memberService = $memberService;
    }
    
    public function show(){
        $awaitingMembers = $this->memberService->getAllUnApprovedAndUnReviewedMembers();
        return view('admin.index')
                ->with('awaitingMembers', $awaitingMembers);
    }
}
