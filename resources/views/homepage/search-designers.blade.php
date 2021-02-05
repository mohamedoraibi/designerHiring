@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Designers
@endsection
@section('titlebar')
@endsection
@section('content')

    <!-- Full Page Content -->
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

            <!-- Freelancers List Container -->
            <div class="freelancers-container freelancers-grid-layout margin-top-35">
            @if(!empty($users) && $users->count())
                @foreach($users as $user)
                    <!--Freelancer -->
                        <div class="freelancer">

                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">

                                    <!-- Bookmark Icon -->
                                    <span class="bookmark-icon"></span>

                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        {{--                                <div class="verified-badge"></div>--}}
                                        {{--                                <a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg"--}}
                                        {{--                                                                              alt=""></a>--}}
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="single-freelancer-profile.html">{{$user->name}} </a></h4>
                                        <span>{{$user->title}}</span>
                                    </div>

                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="4.9"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>

                                        <li>Projects <strong>29</strong></li>
                                        {{--                                <li>project Success <strong>95%</strong></li>--}}
                                    </ul>
                                </div>
                                <a href="/profile/{{$user->id}}" class="button button-sliding-icon ripple-effect">View
                                    Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        <!-- Freelancer / End -->
                    @endforeach
                @else
                    <div class="notify-box margin-top-15">
                        There are no data.
                    </div>
                @endif
            </div>
            <!-- Freelancers Container / End -->

            <!-- Pagination -->
            <div class="pagination">
                {!! $users->links() !!}
            </div>
            <!-- Pagination / End -->
        </div>
    </div>
@endsection
