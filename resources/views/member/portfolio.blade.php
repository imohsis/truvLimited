@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">Portfolio</span></h3>
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
                            <th>S/N</th>
                            <th>Scheme</th>
                            <th>Starting Class</th>
                            <th>Stage</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #EDF1F5;">
                            <td>1</td>
                            <td class="txt-oflo"> &nbsp;Keke Napep Ownership Scheme</td>
                            <td class="">Bronze | Fee = ₦2,000</td>
                            <td class="">Stage One</td>
                        </tr>
                        <tr >
                             <td>2</td>
                            <td class="txt-oflo"> &nbsp;House Ownership Scheme</td>
                            <td class="">Gold | Fee = ₦6,000</td>
                            <td class="">Stage Three</td>
                        </tr>
                       
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