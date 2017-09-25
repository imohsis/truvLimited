@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">All Members</span></h3>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #EDF1F5;">
                            <td>1</td>
                            <td>VIX00INT001</td>
                            <td class="txt-oflo"> &nbsp;Wale Akanbi</td>
                            <td class="">joe45ola@gmail.com</td>
                            <td class="">09083345566</td>
                            <td>Lagos</td>
                            <td><a href="{{ url('/admin/singlemember')}}" class="btn btn-default"><span class="">View</span></a></td>
                        </tr>
                        <tr >
                            <td>2</td>
                             <td>VIX00INT002</td>
                            <td class="txt-oflo"> &nbsp;Snow Joseph</td>
                            <td class="">snowjos@gmail.com</td>
                            <td class="">070499883996</td>
                            <td>Ogun</td>
                            <td><a href="{{ url('/admin/singlemember')}}" class="btn btn-default"><span class="">View</span></a></td>
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