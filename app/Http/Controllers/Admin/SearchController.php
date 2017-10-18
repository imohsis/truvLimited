<?php


namespace App\Http\Controllers\Admin;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{


    public function index(Request $request){

        //dd($request->get('query'));

        if ($request->has('query')){
           $members_portfolio = Member::select('members.id','members.full_name','portfolios.portfolio_code','portfolios.scheme_id','members.email','members.phone','members.location')
               ->join('portfolios','members.id','=','portfolios.member_id')
                                    ->search($request->get('query'))
                                    ->paginate(15);
        }

        //dd($members_portfolio);


        return view('admin.search')->with('members',$members_portfolio);


    }

}