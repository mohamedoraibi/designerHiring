@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Manage Projects
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('Projects')
    active-submenu
@endsection
@section('content')
    <div class="col-xl-12">
        <div class="row">
            <a href="/project">
                <button class="button ripple-effect big margin-top-30"
                        form="skill-form">Add Project
                </button>
            </a>
        </div>
    </div>
    <br>
    <!-- Row -->
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-assignment"></i> My Projects</h3>
                </div>

                <div class="content">
                    <ul class="dashboard-box-list">
                        @if(!empty($Projects) && $Projects->count())
                            @foreach($Projects as $Project)
                                <li>
                                    <!-- Job Listing -->
                                    <div class="job-listing width-adjustment">

                                        <!-- Job Listing Details -->
                                        <div class="job-listing-details">

                                            <!-- Details -->
                                            <div class="job-listing-description">
                                                <h3 class="job-listing-title"><a href="#">{{$Project->name}}</a> <span
                                                        class="dashboard-status-button yellow">Expiring</span></h3>

                                                <!-- Job Listing Footer -->
                                                <div class="job-listing-footer">
                                                    <ul>
                                                        <li>
                                                            <i class="icon-material-outline-access-time"></i> {{$Project->created_at->diffForHumans()}}
                                                            left
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
                                        <a href="/bid/{{$Project->id}}" class="button ripple-effect"><i
                                                class="icon-material-outline-supervisor-account"></i> Manage Bidders
                                            <span class="button-info">3</span></a>
                                        <a href="/project/{{$Project->id}}"
                                           class="button gray ripple-effect ico"
                                           title="Edit"
                                           data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                                        <a href="/project/remove/{{$Project->id}}"
                                           onclick="return confirm('Are you sure want to remove the project ({{$Project->name}}?)')"
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
                        {{--                        {!! $Projects->render() !!}--}}

                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="pagination">
        {!! $Projects->render() !!}
    </div>
    <!-- Row / End -->
@endsection
