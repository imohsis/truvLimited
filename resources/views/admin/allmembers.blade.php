@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Old Members</span></h3>
            <div class="table-responsive">
                <form action="{{url('/admin/items/export')}}" enctype="multipart/form-data">
                    <button class="btn btn-success pull-right" type="submit">Export</button>
                </form>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Scheme</th>
                            <th>Stage</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($members as $member)

                            <?php
                            $scheme = "";
                            switch ($member->scheme_id):
                                case ($member->scheme_id == App\Schemes::$KEKEANDMOTOCYCLEOWNERSHIPSCHEME):
                                    $scheme = "Keke And Motocycle Ownership Scheme";
                                    break;
                                case ($member->scheme_id == App\Schemes::$HOUSEOWNERSHIPSCHEME):
                                    $scheme = "House Ownership Scheme";
                                    break;
                                case ($member->scheme_id == App\Schemes::$FINANCIALEMPOWERMENTSCHEME):
                                    $scheme = "Financial Empowerment Scheme";
                                    break;
                            endswitch;

                            $startingClass = "";
                            $startingClassId = $member->scheme_id;
                            switch ($startingClassId):
                                case ($startingClassId == \App\StartingClasses::$CLASSIC):
                                    $startingClass = "Classic Starting Class";
                                    break;
                                case ($startingClassId == \App\StartingClasses::$PREMIUM):
                                    $startingClass = "Premium Starting Class";
                                    break;
                                case ($startingClassId == \App\StartingClasses::$PLATINUM):
                                    $startingClass = "Platinum Staring Class";
                                    break;
                            endswitch;

                          //  $backgroundColor = (($index + 1) % 2) == 0 ? "#FFFFFF" : "#EDF1F5";

                            ?>
                       {{-- @if($member->user() != null)--}}
                        <tr style="background-color: #EDF1F5;">

                            <td class="txt-oflo"> &nbsp;{{ $member->full_name }}</td>
                            <td>{{ $member->portfolio_code }}</td>
                            <td>{{ $scheme }}</td>
                            <td>{!! \App\Stages::determineStage($member->stage_id) !!}</td>
                            <td class="">{{ $member->email }}</td>
                            <td class="">{{ $member->phone }}</td>
                            <td>{{ $member->location }}</td>
                            
                            <td><a href="{{ url('/admin/singlemembers?memberId='.$member->id.'&portfolioCode='.$member->portfolio_code)}}" class="btn btn-default"><span class="">View</span></a></td>
                        </tr>
                       {{-- @endif--}}

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6" style="margin-top: 25px;">Records {{ $members->firstItem() }} - {{ $members->lastItem() }} of {{ $members->total() }} (for page {{ $members->currentPage() }} )</div>
                    <div class="col-md-6" style="text-align: right;"> {{ $members->links() }}</div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection