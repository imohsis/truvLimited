@extends('layouts.app-admin')

@section('main-content')

@if($portfolio == null || $member == null)
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Sorry Data Not Found</span></h3>
        </div>
    </div>
</div>

@else
<div class="row">
    <div class="col-md-5 col-xs-12">
        <div class="white-box">
            <div class="user-bg">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="/plugins/images/prof.png" class="thumb-lg img-circle" alt="img"></a>
                       
                        <h1 class="text-white">{{ $member->full_name }}</h1> 
                    </div>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="col-md-4 col-sm-12 text-center">
                    <a href="{{ url('/admin/members/'.$member->id.'/portfolios') }}" class="btn btn-default">Portfolios</a>
                </div>

                @if(auth()->user()->role_id != \App\UserRole::$GUEST)
                    @if($portfolio->approved_status == 0)
                        <div class="col-md-4 col-sm-12 text-center">
                            <a data-toggle="modal" data-target="#disApproveRegistration" class="btn btn-default">DisApprove It</a>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center">
                            <a data-toggle="modal" data-target="#approveRegistration" class="btn btn-default">Approve It</a>
                        </div>

                      @endif

                    @endif
            </div>
        </div>

    </div>

    <div class="col-md-7 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('/admin/profile') }}">
                @if ($errors)
                @foreach ($errors->all() as $error)
                <span class="help-block" style="color: red;"> {{ $error }}</span>
                @endforeach
                @endif
                @if (session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?> value="{{ $member->full_name }}" name="fullName" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?> value="{{ $member->phone }}" name="phone" class="form-control form-control-line"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Email Address</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" readonly  value="{{ $member->user()->email }}" name="email" class="form-control form-control-line"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Location</label>
                    <div class="col-md-12">
                        <textarea type="text" placeholder="" <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?> value="{{ $member->location }}" name="address" class="form-control form-control-line">{{ $member->location }}</textarea> </div>
                </div>
                <div>
                    <label class="col-md-12">Scheme</label>
                    <div class="col-md-12">
                           <input type="text" placeholder="" readonly value="{{ $schemeName }}" name="packageName" class="form-control form-control-line"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teller Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?> value="{{ $portfolio->teller_id }}" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teller Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder=""  <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?> value="{{ $portfolio->teller_id }}" name="tellerId" class="form-control form-control-line"> </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-12">Transaction Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" <?php if (auth()->user()->role_id == \App\UserRole::$GUEST):?> readonly <?php endif;?>  value="{{ $portfolio->transaction_id }}" name="transactionId" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Paid Into</label>
                    <div class="col-md-12">
                        <select name="bankPaidInto" class="form-control input-lg">
                            <option value="" selected="">Select Bank</option>
                            <option <?php if($portfolio->bank_paid_into == "GT Bank PLC"):?>
                                    selected
                                    <?php endif;?>
                                    value="GT Bank PLC">GT Bank PLC</option>
                            <option
                                <?php if($portfolio->bank_paid_into == "Zenith Bank PLC"):?>
                                selected
                                <?php endif;?>
                                value="Zenith Bank PLC">Zenith Bank PLC</option>

                            <option
                                <?php if($portfolio->bank_paid_into == "Fidelity Bank PLC"):?>
                                selected
                                <?php endif;?>
                                    value="Fidelity Bank PLC">Fidelity Bank PLC</option>
                            <option

                                <?php if($portfolio->bank_paid_into == "Diamond Bank PLC"):?>
                                selected
                                <?php endif;?>

                                    value="Diamond Bank PLC">Diamond Bank PLC</option>

                        </select>

                    </div>
                </div>
                <?php $userThatApproved = \App\User::find($portfolio->approved_by); ?>
                @if($userThatApproved != null)
                <div class="form-group">
                    <label class="col-md-12">Approved By</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" readonly value="{{ $userThatApproved->name }}" name="approvedBy" class="form-control form-control-line"> </div>
                </div>
                @endif
                    <input type="hidden" name="portfolioId" value="{{$member->id}}">
                    <input type="hidden" name="code" value="{{$member->portfolio_code}}">
                    <button type="submit" class="btn btn-primary">Update</button>


            </form>
        </div>
    </div>
</div>

<div id="approveRegistration" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to approve {{ $member->full_name }} Registration</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/approveportfolio') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="portfolioId" value="{{ $portfolio->id }}"/>

                    <input type="submit" class="btn btn-warning" value="Yes"/>  

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div id="disApproveRegistration" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to disapprove {{ $member->full_name }} Registration</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/disapproveportfolio') }}">
                    {{ csrf_field() }}
                    <br/>
                    <div class="form-group clearfix">
                        <label class="col-md-12">Enter reason for disapproval</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="reason"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="portfolioId" value="{{ $portfolio->id }}"/>
                   <br/>

                    <div class="clearfix">
                        <button type="submit" class="btn btn-warning pull-right">Submit</button>
                   </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
            </div>
        </div>

    </div>
</div>

@endif
@endsection