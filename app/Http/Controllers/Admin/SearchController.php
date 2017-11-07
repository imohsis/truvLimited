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
           $members_portfolio = Member::select('Members.id','Members.full_name','Portfolios.portfolio_code','Portfolios.scheme_id','Members.email','Members.phone','Members.location')
               ->join('Portfolios','Members.id','=','Portfolios.member_id')
                                    ->search($request->get('query'))
                                    ->paginate(15);
        }

        //dd($members_portfolio);


        return view('admin.search')->with('members',$members_portfolio);


    }

}