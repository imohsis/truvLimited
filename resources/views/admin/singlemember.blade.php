@extends('layouts.app-admin')

@section('main-content')
     
<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="user" src="/plugins/images/logo.png">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="/plugins/images/prof.png" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white">John Jones  <a href="{{ url('/admin/singlememberportfolio')}}" class="btn btn-warning">Approve</a></h4>
                        <h1 class="text-white">VI00001</h1> </div>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="col-md-6 col-sm-12 text-center">
                    <a href="{{ url('/admin/singlememberportfolio')}}" class="btn btn-default">View Portfolio</a>
                </div><div class="visible-xs"><br/></div>
                <div class="col-md-6 col-sm-12 text-center">
                    <a href="{{ asset('/images/teller.jpeg')}}" target="_blank" class="btn btn-default">&nbsp;&nbsp;View Teller&nbsp;&nbsp;</a>
                </div>


            </div>
        </div>
       
    </div>

    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <form class="form-horizontal form-material" method="post" action="{{ url('/profile') }}">
                 @if ($errors)
                    @foreach ($errors->all() as $error)
                    <span class="help-block" style="color: red;"> {{ $error }}</span>
                    @endforeach
                    @endif
                @if(session('success'))
                <span style="color: green">{{ session('success') }}</span>
                @endif
                @if(session('error'))
                <span style="color: red">{{ session('error') }}</span>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-12">Full Name</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="" name="fullName" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="" name="phone" class="form-control form-control-line"> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Email Address</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="" value="" name="email" class="form-control form-control-line"> </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-12">Location</label>
                    <div class="col-md-12">
                        <textarea type="text" placeholder="" value="" name="address" class="form-control form-control-line"></textarea> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" placeholder="" value="" name="password" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Confirm Password</label>
                    <div class="col-md-12">
                        <input type="password" placeholder="" value="" name="password-confirmation" class="form-control form-control-line"> </div>
                </div>

               
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success">Request Support</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection