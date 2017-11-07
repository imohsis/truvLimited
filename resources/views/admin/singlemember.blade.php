@extends('layouts.app-admin')

@section('main-content')

@if($member == null)
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Sorry Member Not Found</span></h3>
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
                        <h4 class="text-white">{{ $member->full_name }}  </h4>
                        <h1 class="text-white">{{ $member->member_id }}</h1> </div>
                </div>
            </div>
            <div class="user-btm-box">
               <div class="row">
                   <div class="col-md-4 col-sm-12 text-center">
                       <a href="{{ url('/admin/members/'.$member->id.'/portfolios')}}" class="btn btn-default">View Portfolio</a>
                   </div>
                   <div class="col-md-4 col-sm-12 text-center">
                       <a href="{{ url('/admin/member/'.$member->id.'/network')}}" class="btn btn-default">View Network</a>
                   </div>


                <div class="visible-xs"><br/></div>

                 @if(auth()->user()->role_id != \App\UserRole::$GUEST)
                     @if($member->approved_status == true)
                         @if(!$member->is_deactivate)
                             <div class="col-md-4 col-sm-12 text-center">
                                 <a href="{{ url('/admin/deactivateaccount/'.$member->id)}}" class="btn btn-default">Deactivate</a>
                             </div>
                         @else
                             <div class="col-md-4 col-sm-12 text-center">
                                 <a href="{{ url('/admin/activateaccount/'.$member->id)}}" class="btn btn-default">Activate</a>
                             </div>
                         @endif
                     @else
                         <div class="col-md-4 col-sm-12 text-center">
                             <a data-toggle="modal" data-target="#disApproveMember" class="btn btn-default">DisApprove</a>
                         </div>
                         <div class="col-md-4 col-sm-12 text-center">
                             <a data-toggle="modal" data-target="#approveMember" class="btn btn-default">&nbsp;&nbsp;&nbsp;Approve&nbsp;&nbsp;</a>
                         </div>
                     @endif
                 @endif
             </div>



            </div>
        </div>

    </div>

    <div class="col-md-7 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('admin/profile') }}">
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
                        <input type="text" placeholder=""  value="{{ $member->full_name }}" name="fullName" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->phone }}" name="phone" class="form-control form-control-line"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Email Address</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" readonly value="{{ $member->email }}" name="email" class="form-control form-control-line"> </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Location</label>
                    <div class="col-md-12">
                        <textarea type="text" placeholder=""  value="{{ $member->location }}" name="address" class="form-control form-control-line">{{ $member->location }}</textarea> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Teller Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="{{ $member->teller_id }}" name="tellerId" class="form-control form-control-line"> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Transaction Id</label>
                    <div class="col-md-12">
                        <input type="text" placeholder=""  value="{{ $member->transaction_id }}" name="transactionId" class="form-control form-control-line"> </div>
                </div>
                    <div class="form-group">
                        <label class="col-md-12">Bank Paid Into</label>
                        <div class="col-md-12">
                            <select name="bankPaidInto" class="form-control input-lg">
                                <option value="" selected="">Select Bank</option>
                                <option <?php if($member->bank_paid_into == "GT Bank PLC"):?>
                                        selected
                                        <?php endif;?>
                                        value="GT Bank PLC">GT Bank PLC</option>
                                <option
                                    <?php if($member->bank_paid_into == "Zenith Bank PLC"):?>
                                    selected
                                    <?php endif;?>
                                    value="Zenith Bank PLC">Zenith Bank PLC</option>

                                <option
                                    <?php if($member->bank_paid_into == "Fidelity Bank PLC"):?>
                                    selected
                                    <?php endif;?>
                                    value="Fidelity Bank PLC">Fidelity Bank PLC</option>
                                <option

                                    <?php if($member->bank_paid_into == "Diamond Bank PLC"):?>
                                    selected
                                    <?php endif;?>

                                    value="Diamond Bank PLC">Diamond Bank PLC</option>

                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Account Number</label>
                        <div class="col-md-12">
                            <input type="text" placeholder=""  value="{{ $member->account_no }}" name="transactionId" class="form-control form-control-line"> </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Bank Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder=""  value="{{ $member->bank_name }}" name="transactionId" class="form-control form-control-line"> </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Bank Account Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder=""  value="{{ $member->account_name }}" name="transactionId" class="form-control form-control-line"> </div>
                    </div>


                    <input type="hidden" name="portfolioId" value="{{$member->id}}">
                    <input type="hidden" name="code" value="{{$member->portfolio_code}}">
                <?php $userThatApproved = \App\User::find($member->approved_by); ?>
                @if($userThatApproved != null)
                <div class="form-group">
                    <label class="col-md-12">Approved By</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" readonly value="{{ $userThatApproved->name }}" name="approvedBy" class="form-control form-control-line"> </div>
                </div>
                @endif

            <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<div id="approveMember" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to approve {{ $member->full_name }} Registration</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/approvemember') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $member->id }}"/>

                    <input type="submit" class="btn btn-warning" value="Yes"/>  

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<div id="disApproveMember" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to disapprove {{ $member->full_name }} Registration</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/disapprovemember') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $member->id }}"/>
                    <input type="submit" class="btn btn-warning" value="Yes, I am very sure"/>  

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>

    </div>
</div>

@endif
@endsection