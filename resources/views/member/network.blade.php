@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">My Transfers</span></h3>
            <div class="table-responsive">
                 @if(session('success'))
                <span style="color: green">{{ session('success') }}</span>
                @endif
                @if(session('error'))
                <span style="color: red">{{ session('error') }}</span>
                @endif
                <table class="table">
                    <thead>
                        <tr>

                            <th>Transfer Id</th>
                            <th>PAYMENT METHOD</th>
                            <th>Recipient Name</th>
                            <th>Payment Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($transfers))
                        @foreach($transfers as $transfer)
                        <tr class="clickable">

                            <td class="txt-oflo">{{ $transfer->transactionId }}</td>
                            <td>
                                @if($transfer->paymentOption == 1)
                                    Bank Payment
                                @endif
                                @if($transfer->paymentOption == 2)
                                    Credit Card Payment
                                @endif
                            </td>
                            <td><img src="/countries/{{ $transfer->recipientCountryId }}.png" class="contact-country-image"/> {{ $transfer->recipientName }}</td>
                            <td class="txt-oflo"> &nbsp;{{ $transfer->transactionStatus }}</td>
                            <td>{{ $transfer->date }}&nbsp;&nbsp;&nbsp;&nbsp;</td>

                        </tr>  
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
             <ul class="pagination">


                 @if(isset($pagination))
                @if($pagination->currentPage <= 0)
                <li class="disabled"><span>« &nbsp;previous</span></li>
                @else
                <li ><a href="{{ url('/transfers?page='.($pagination->currentPage - 1).'#hello') }}"><span>« &nbsp;previous</span></a></li>
                @endif     
                @if($pagination->currentPage < ($pagination->totalPages - 1))
                <li><a href="{{ url('/transfers?page='.($pagination->currentPage + 1).'#hello') }}" rel="next">next &nbsp;»</a></li>
                @else
                <li class="disabled"><span>next &nbsp;»</span></li>
                @endif
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection