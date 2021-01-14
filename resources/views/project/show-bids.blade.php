@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    My Acitve Bids
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('Tasks')
    active-submenu
@endsection
@section('content')
    {{--    <div class="col-xl-12">--}}
    {{--        <div class="row">--}}
    {{--            <a href="/project">--}}
    {{--                <button class="button ripple-effect big margin-top-30"--}}
    {{--                        form="skill-form">Add Project--}}
    {{--                </button>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <br>
    <!-- Row -->
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-assignment"></i> Bids</h3>
                </div>

                <div class="content">
                    <ul class="dashboard-box-list">
                        @if(!empty($Bidding) && $Bidding->count())
                            @foreach($Bidding as $Bid)
                                <li>
                                    <!-- Job Listing -->
                                    <div class="job-listing width-adjustment">

                                        <!-- Job Listing Details -->
                                        <div class="job-listing-details">

                                            <!-- Details -->
                                            <div class="job-listing-description">
                                                <h3 class="job-listing-title"><a href="#">{{$Bid->price}}
                                                        - {{$Bid->notes}}</a> <span
                                                        class="dashboard-status-button yellow">Expiring</span></h3>

                                                <!-- Job Listing Footer -->
                                                <div class="job-listing-footer">
                                                    <ul>
                                                        <li>
                                                            {{--                                                            <i class="icon-material-outline-access-time"></i> {{$Bid->created_at->diffForHumans()}}--}}
                                                            10 min left
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Task Details -->
                                    <ul class="dashboard-task-info">
                                        <li><strong>3</strong><span>Bids</span></li>
                                        <li><strong>$22</strong><span>Avg. Bid</span></li>
                                    </ul>

                                    <!-- Buttons -->
                                    <div class="buttons-to-right always-visible">
                                        {{--                                        <a href="/bid/{{$Bid->id}}" class="button ripple-effect"><i--}}
                                        {{--                                                class="icon-material-outline-supervisor-account"></i> Manage Bidders--}}
                                        {{--                                            <span class="button-info">3</span></a>--}}
                                        {{--                                        <a href="/project/{{$Bid->id}}"--}}
                                        {{--                                           class="button gray ripple-effect ico"--}}
                                        {{--                                           title="Edit"--}}
                                        {{--                                           data-tippy-placement="top"><i class="icon-feather-edit"></i></a>--}}
                                        <a href="/bid/remove/{{$Bid->id}}"
                                           onclick="return confirm('Are you sure want to remove the project ({{$Bid->name}}?)')"
                                           class="button gray ripple-effect ico" title="Remove"
                                           data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <li>
                                <p>There are no data.</p>
                            </li>
                        @endif
                        {{--                        {!! $Bids->render() !!}--}}

                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="pagination">
        {{--        {!! $Bidding->render() !!}--}}
    </div>
    <!-- Row / End -->
@endsection
