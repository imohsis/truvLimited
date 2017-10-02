@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">My Network</span></h3>
            <div class="table-responsive">
              
                <table class="table">
                    <thead>
                        <tr>

                            <th>S/N</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($members))
                        @foreach($members as $index => $member)
                        <tr class="clickable">

                            <td class="txt-oflo">{{ $index + 1 }}</td>
                            <td>
                              {{ $member->full_name }}
                            </td>
                            <td>{{ $member->location }}</td>
                            <td class="txt-oflo"> &nbsp;{{ $member->created_at }}</td>
                        </tr>  
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
             <ul class="pagination">
                 @if(null !== $members)
                 {{ $members->links() }}
                 @endif
            </ul>
        </div>
    </div>
</div>
@endsection