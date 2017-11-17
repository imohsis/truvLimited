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
                       <a href="{{ url('/admin/members/'.$member->member_id.'/portfolios')}}" class="btn btn-default">View Portfolio</a>
                   </div>
                   <div class="col-md-4 col-sm-12 text-center">
                       <a href="{{ url('/admin/member/'.$member->member_id.'/network')}}" class="btn btn-default">View Network</a>
                   </div>


                <div class="visible-xs"><br/></div>

                 @if(auth()->user()->role_id != \App\UserRole::$GUEST)
                     @if($member->approved_status == true)

                         @if($member->is_deactivate == 0)
                               <div class="col-md-4 col-sm-12 text-center">
                                   <a data-toggle="modal" data-target="#deactivate" class="btn btn-default">Deactivate</a>
                               </div>
                         @else
                             <div class="col-md-4 col-sm-12 text-center">
                                 <a href="{{ url('/admin/activateaccount/'.$member->user_id)}}" class="btn btn-default">Activate</a>
                             </div>
                             <div style="padding-left: 30px;margin-top: 50px;">
                                 <h4 style="text-decoration: underline;">Reason for deactivating</h4>
                                 <p>{{$member->deactivate_reason}}</p>
                             </div>
                         @endif

                     @endif
                 @endif
             </div>



            </div>
        </div>

    </div>

    <div class="col-md-7 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('admin/profile') }}" id="update">
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
                        <select name="address" class="form-control input-lg">
                            <option   <?php if($member->location  == "Abia State"):?>
                                      selected
                                      <?php endif;?> value="Abia State">Abia State</option>
                            <option  <?php if($member->location  == "Adamawa State"):?>
                                     selected
                                     <?php endif;?> value="Adamawa State">Adamawa State</option>
                            <option <?php if($member->location  == "Akwa Ibom State"):?>
                                    selected
                                    <?php endif;?>  value="Akwa Ibom State">Akwa Ibom State</option>
                            <option <?php if($member->location  == "Anambra State"):?>
                                    selected
                                    <?php endif;?>  value="Anambra State">Anambra State</option>
                            <option <?php if($member->location  == "Bauchi State"):?>
                                    selected
                                    <?php endif;?> value="Bauchi State">Bauchi State</option>
                            <option <?php if($member->location  == "Bayelsa State"):?>
                                    selected
                                    <?php endif;?> value="Bayelsa State">Bayelsa State</option>
                            <option  <?php if($member->location  == "Benue State"):?>
                                     selected
                                     <?php endif;?> value="Benue State">Benue State</option>
                            <option  <?php if($member->location  == "Borno State"):?>
                                     selected
                                     <?php endif;?> value="Borno State">Borno State</option>
                            <option <?php if($member->location  == "Cross River State"):?>
                                    selected
                                    <?php endif;?> value="Cross River State">Cross River State</option>
                            <option <?php if($member->location  == "Delta State"):?>
                                    selected
                                    <?php endif;?> value="Delta State">Delta State</option>
                            <option <?php if($member->location  == "Ebonyi State"):?>
                                    selected
                                    <?php endif;?> value="Ebonyi State">Ebonyi State</option>
                            <option <?php if($member->location  == "Edo State"):?>
                                    selected
                                    <?php endif;?>  value="Edo State">Edo State</option>
                            <option <?php if($member->location  == "Ekiti State"):?>
                                    selected
                                    <?php endif;?> value="Ekiti State">Ekiti State</option>
                            <option <?php if($member->location  == "Enugu State"):?>
                                    selected
                                    <?php endif;?> value="Enugu State">Enugu State</option>
                            <option <?php if($member->location  == "Gombe State"):?>
                                    selected
                                    <?php endif;?> value="Gombe State">Gombe State</option>
                            <option <?php if($member->location  == "Imo State"):?>
                                    selected
                                    <?php endif;?> value="Imo State">Imo State</option>
                            <option <?php if($member->location  == "Jigawa State"):?>
                                    selected
                                    <?php endif;?> value="Jigawa State">Jigawa State</option>
                            <option <?php if($member->location  == "Kaduna State"):?>
                                    selected
                                    <?php endif;?> value="Kaduna State">Kaduna State</option>
                            <option <?php if($member->location  == "Kano State"):?>
                                    selected
                                    <?php endif;?> value="Kano State">Kano State</option>
                            <option <?php if($member->location  == "Katsina State"):?>
                                    selected
                                    <?php endif;?> value="Katsina State">Katsina State</option>
                            <option <?php if($member->location  == "Kebbi State"):?>
                                    selected
                                    <?php endif;?> value="Kebbi State">Kebbi State</option>
                            <option <?php if($member->location  == "Kogi State"):?>
                                    selected
                                    <?php endif;?> value="Kogi State">Kogi State</option>
                            <option <?php if($member->location  == "Kwara State"):?>
                                    selected
                                    <?php endif;?> value="Kwara State">Kwara State</option>
                            <option <?php if($member->location  == "Lagos State"):?>
                                    selected
                                    <?php endif;?> value="Lagos State">Lagos State</option>
                            <option <?php if($member->location  == "Nasarawa State"):?>
                                    selected
                                    <?php endif;?> value="Nasarawa State">Nasarawa State</option>
                            <option <?php if($member->location  == "Niger State"):?>
                                    selected
                                    <?php endif;?> value="Niger State">Niger State</option>
                            <option <?php if($member->location  == "Ogun State"):?>
                                    selected
                                    <?php endif;?> value="Ogun State">Ogun State</option>
                            <option  <?php if($member->location  == "Ondo State"):?>
                                     selected
                                     <?php endif;?> value="Ondo State">Ondo State</option>
                            <option <?php if($member->location  == "Osun State"):?>
                                    selected
                                    <?php endif;?> value="Osun State">Osun State</option>
                            <option  <?php if($member->location  == "Oyo State"):?>
                                     selected
                                     <?php endif;?> value="Oyo State">Oyo State</option>
                            <option <?php if($member->location  == "Plateau State"):?>
                                    selected
                                    <?php endif;?> value="Plateau State">Plateau State</option>
                            <option <?php if($member->location  == "Rivers State"):?>
                                    selected
                                    <?php endif;?> value="Rivers State">Rivers State</option>
                            <option  <?php if($member->location  == "Sokoto State"):?>
                                     selected
                                     <?php endif;?> value="Sokoto State">Sokoto State</option>
                            <option <?php if($member->location  == "Taraba State"):?>
                                    selected
                                    <?php endif;?> value="Taraba State">Taraba State</option>
                            <option <?php if($member->location  == "Yobe State"):?>
                                    selected
                                    <?php endif;?> value="Yobe State">Yobe State</option>
                            <option <?php if($member->location  == "Zamfara State"):?>
                                    selected
                                    <?php endif;?> value="Zamfara State">Zamfara State</option>
                            <option  <?php if($member->location  == "Abuja FCT"):?>
                                     selected
                                     <?php endif;?> value="Abuja FCT">Abuja FCT</option>
                        </select>
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
                            <input type="text" placeholder=""  value="{{ $member->account_no }}" name="accNo" class="form-control form-control-line"> </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Bank Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder=""  value="{{ $member->bank_name }}" name="bankName" class="form-control form-control-line"> </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Bank Account Name</label>
                        <div class="col-md-12">
                            <input type="text" placeholder=""  value="{{ $member->account_name }}" name="accName" class="form-control form-control-line"> </div>
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


<div id="deactivate" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Are you sure you want to deactivate {{ $member->full_name }}'s Account</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ url('/admin/deactivateaccount/') }}">
                    {{ csrf_field() }}
                    <br/>
                    <div class="form-group clearfix">
                        <label class="col-md-12">Enter reason for deactivating</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="reason"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="memberId" value="{{ $member->user_id }}"/>
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

{{--<div id="approveMember" class="modal fade" role="dialog">
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
</div>--}}



{{--<div id="disApproveMember" class="modal fade" role="dialog">
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
</div>--}}

@endif
@endsection