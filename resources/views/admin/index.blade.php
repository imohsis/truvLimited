@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">New Members</span></h3>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($awaitingMembers as $index => $member)
                        @if($member->user() != null)
                        <?php $backgroundColor = ""; ?>
                            @if((($index + 1) < 2) || ($index % 2 != 0))
                            <?php $backgroundColor = "#EDF1F5"; ?>
                            @endif
                        <tr style="background-color: {{ $backgroundColor}}};">
                            <td>{{ $index + 1}}</td>
                            <td class="txt-oflo"> &nbsp;{{ $member->full_name }}</td>
                            <td class="">{{ $member->user()->email }}</td>
                            <td class="">{{ $member->phone }}</td>
                            <td>{{ $member->location }}</td>
                            <td><a href="{{ url('/admin/members/'.$member->id)}}" class="btn btn-default"><span class="">View</span></a></td>
                        </tr>
                        @endif
                        
                       @endforeach
                    </tbody>
                </table>
            </div>
            <ul class="pagination">
             
                {{ $awaitingMembers->links() }}
            </ul>
        </div>
    </div>
</div>
@endsection