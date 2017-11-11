@extends('layouts.app-admin')

@section('main-content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="white-box">
            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">

            </div>
            <h3 class="box-title"><span style="color: #9FC735">{{$name[0]['full_name']}}'s Network</span></h3>
            <div class="table-responsive">
              
                <table class="table">
                    <thead>
                        <tr>

                            <th>S/N</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Scheme</th>
                            <th>Starting Level</th>
                            <th>Location</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($portfolios))
                        @foreach($portfolios as $index => $portfolio)
                        <?php $member = App\Member::find($portfolio->member_id); ?>
                        @if($member != null)
                        <tr class="clickable">

                            <td class="txt-oflo"> {{ ($portfolio->currentpage()-1) * $portfolio->perpage() + $index + 1 }}}</td>
                            <td>{{ $portfolio->portfolio_code}}</td>
                            <td>
                              {{ $member->full_name }}
                            </td>
                            <td>
                                {{$portfolio->schemeName}}
                            </td>
                            <td>
                                {{$portfolio->description}} from ₦{{$portfolio->amount}}
                            </td>
                            <td>{{ $member->location }}</td>
                            <td class="txt-oflo"> &nbsp;{{ $member->created_at }}</td>
                        </tr>  
                        @endif
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
             <ul class="pagination">
                 @if(null !== $portfolios)
                 {{ $portfolios->links() }}
                 @endif
            </ul>
        </div>
    </div>
</div>
@endsection