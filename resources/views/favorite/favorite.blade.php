@extends('layouts.masterDashboard')
@section('css')
    {{--    <style>--}}


    {{--    </style>--}}
@endsection
@section('title')
    Favorites
@endsection
@section('Favorite')
    active-submenu
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-business-center"></i> Favorite Projects</h3>
                </div>

                <div class="content">
                    <ul class="dashboard-box-list">
                        <li>
                            <!-- Job Listing -->
                            <div class="job-listing">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details">

                                    <!-- Logo -->
                                    <a href="#" class="job-listing-company-logo">
                                        <img src="images/company-logo-02.png" alt="">
                                    </a>

                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h3 class="job-listing-title"><a href="#">Barista and Cashier</a></h3>

                                        <!-- Job Listing Footer -->
                                        <div class="job-listing-footer">
                                            <ul>
                                                <li><i class="icon-material-outline-business"></i> Coffee</li>
                                                <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                                <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                                <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div class="buttons-to-right">
                                <a href="#" class="button red ripple-effect ico" title="Remove"
                                   data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                            </div>
                        </li>

                        <li>
                            <!-- Job Listing -->
                            <div class="job-listing">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details">

                                    <!-- Logo -->
                                    <a href="#" class="job-listing-company-logo">
                                        <img src="images/company-logo-04.png" alt="">
                                    </a>


                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h3 class="job-listing-title"><a href="#">Administrative Assistant</a></h3>

                                        <!-- Job Listing Footer -->
                                        <div class="job-listing-footer">
                                            <ul>
                                                <li><i class="icon-material-outline-business"></i> Mates</li>
                                                <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                                <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                                <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="buttons-to-right">
                                <a href="#" class="button red ripple-effect ico" title="Remove"
                                   data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                            </div>
                        </li>

                        <li>
                            <!-- Job Listing -->
                            <div class="job-listing">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details">

                                    <!-- Logo -->
                                    <a href="#" class="job-listing-company-logo">
                                        <img src="images/company-logo-05.png" alt="">
                                    </a>

                                    <!-- Details -->
                                    <div class="job-listing-description">
                                        <h3 class="job-listing-title"><a href="#">Construction Labourers</a></h3>

                                        <!-- Job Listing Footer -->
                                        <div class="job-listing-footer">
                                            <ul>
                                                <li><i class="icon-material-outline-business"></i> Podous</li>
                                                <li><i class="icon-material-outline-location-on"></i> San Francisco</li>
                                                <li><i class="icon-material-outline-business-center"></i> Full Time</li>
                                                <li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="buttons-to-right">
                                <a href="#" class="button red ripple-effect ico" title="Remove"
                                   data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-face"></i> Favorite Designers</h3>
                </div>

                <div class="content">
                    <ul class="dashboard-box-list">
                        <li>
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">

                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg"
                                                                            alt="" title="Germany"
                                                                            data-tippy-placement="top"></a></h4>
                                        <span>iOS Expert + Node Dev</span>
                                        <!-- Rating -->
                                        <div class="freelancer-rating">
                                            <div class="star-rating" data-rating="4.2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="buttons-to-right">
                                <a href="#" class="button red ripple-effect ico" title="Remove"
                                   data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                            </div>
                        </li>
                        <li>
                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">

                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <a href="#"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">Marcin Kowalski <img class="flag" src="images/flags/pl.svg"
                                                                             alt="" title="Poland"
                                                                             data-tippy-placement="top"></a></h4>
                                        <span>Front-End Developer</span>
                                        <!-- Rating -->
                                        <div class="freelancer-rating">
                                            <div class="star-rating" data-rating="4.7"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="buttons-to-right">
                                <a href="#" class="button red ripple-effect ico" title="Remove"
                                   data-tippy-placement="left"><i class="icon-feather-trash-2"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
