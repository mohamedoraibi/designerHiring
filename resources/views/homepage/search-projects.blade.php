@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Projects
@endsection
@section('titlebar')
@endsection
@section('content')
    <div class="container">
        <div class="col-xl-12 col-lg-8 content-left-offset">

        <div class="account-type">
            <div>
                <input type="checkbox" value="1" name="designer1" id="designer1"
                    class="account-type-radio"/>
                <label for="designer1" class="ripple-effect-dark"><i
                        class="icon-material-outline-account-circle"></i> Designer</label>
            </div>
            <div>
                <input type="checkbox" value="1" name="projects1" id="projects1"
                    class="account-type-radio"/>
                <label for="projects1" class="ripple-effect-dark"><i
                        class="icon-material-outline-account-circle"></i> Projects</label>
            </div>

        </div>

            <!-- Tasks Container -->
            <div class="tasks-list-container compact-list margin-top-35">
            @if(!empty($projects) && $projects->count())
                @foreach($projects as $project)
                    <!-- Task -->
                        <a href="/project/explore/{{{$project->id}}}" class="task-listing">

                            <!-- Job Listing Details -->
                            <div class="task-listing-details">

                                <!-- Details -->
                                <div class="task-listing-description">
                                    <h3 class="task-listing-title">{{$project->name}}</h3>
                                    <ul class="task-icons">
                                        <li>
                                            <i class="icon-material-outline-access-time"></i> {{$project->created_at->diffForHumans()}}
                                        </li>
                                    </ul>
                                    <p class="task-listing-text">
                                        {{$project->details}}
                                    </p>
                                    {{--                        <div class="task-tags">--}}
                                    {{--                            <span>iOS</span>--}}
                                    {{--                            <span>Android</span>--}}
                                    {{--                            <span>mobile apps</span>--}}
                                    {{--                            <span>design</span>--}}
                                    {{--                        </div>--}}
                                </div>

                            </div>

                            <div class="task-listing-bid">
                                <div class="task-listing-bid-inner">
                                    <div class="task-offers">
                                        <strong>${{$project->budget}}</strong>
                                        <span>Budget</span>
                                    </div>
                                    <span class="button button-sliding-icon ripple-effect">See Details <i
                                            class="icon-material-outline-arrow-right-alt"></i></span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="notify-box margin-top-15">
                        There are no data.
                    </div>
                @endif
            </div>
            <!-- Tasks Container / End -->


            <div class="pagination">
                {!! $projects->links() !!}
            </div>
        </div>

    </div>
@endsection
