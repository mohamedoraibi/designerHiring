@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    DesignChi
@endsection
@section('content')

    <!-- Intro Banner
    ================================================== -->

    <!-- add class "disable-gradient" to enable consistent background overlay -->
    <div class="intro-banner" data-background-image="{{ asset('newStyle/images/samples/home.png') }}">
        <div class="container">

            <!-- Intro Headline -->
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-headline">
                        <h3>
                            <strong>Hire designers or be hired, at any time!</strong>
                            <br>
                            <span>Thousands of business owners use <strong class="color">DesignChi</strong> to turn their ideas into reality.</span>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-7">
                    <div class="intro-banner-search-form margin-top-95">

                        <!-- Search Field -->


                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <label for="intro-keywords" class="field-title ripple-effect">What are you looking
                                for?</label>
                            <input id="intro-keywords" type="text" placeholder="Project Title or a Designer">
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect"
                                    onclick="window.location.href='jobs-list-layout-full-page-map.html'">Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">{{$projectsCount}}</strong>
                            <span>Projects Posted</span>
                        </li>
                        <li>
                            <strong class="counter">{{$designersCount}}</strong>
                            <span>Designers</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <!-- Category Boxes -->
    <div class="section margin-top-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="section-headline centered margin-bottom-15">
                        <h3>Popular Job Categories</h3>
                    </div>

                    <!-- Category Boxes Container -->
                    <div class="categories-container">

                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-file-code-o"></i>
                            </div>
                            <div class="category-box-counter">612</div>
                            <div class="category-box-content">
                                <h3>Web & Software Dev</h3>
                                <p>Software Engineer, Web / Mobile Developer & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-cloud-upload"></i>
                            </div>
                            <div class="category-box-counter">113</div>
                            <div class="category-box-content">
                                <h3>Data Science & Analitycs</h3>
                                <p>Data Specialist / Scientist, Data Analyst & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-suitcase"></i>
                            </div>
                            <div class="category-box-counter">186</div>
                            <div class="category-box-content">
                                <h3>Accounting & Consulting</h3>
                                <p>Auditor, Accountant, Fnancial Analyst & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pencil"></i>
                            </div>
                            <div class="category-box-counter">298</div>
                            <div class="category-box-content">
                                <h3>Writing & Translations</h3>
                                <p>Copywriter, Creative Writer, Translator & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pie-chart"></i>
                            </div>
                            <div class="category-box-counter">549</div>
                            <div class="category-box-content">
                                <h3>Sales & Marketing</h3>
                                <p>Brand Manager, Marketing Coordinator & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-image"></i>
                            </div>
                            <div class="category-box-counter">873</div>
                            <div class="category-box-content">
                                <h3>Graphics & Design</h3>
                                <p>Creative Director, Web Designer & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-bullhorn"></i>
                            </div>
                            <div class="category-box-counter">125</div>
                            <div class="category-box-content">
                                <h3>Digital Marketing</h3>
                                <p>Darketing Analyst, Social Profile Admin & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-graduation-cap"></i>
                            </div>
                            <div class="category-box-counter">445</div>
                            <div class="category-box-content">
                                <h3>Education & Training</h3>
                                <p>Advisor, Coach, Education Coordinator & More</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Boxes / End -->


    <!-- Features Jobs -->
    <div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-35">
                        <h3>Featured Projects</h3>
                        <a href="jobs-list-layout-full-page-map.html" class="headline-link">Browse All Projects</a>
                    </div>

                    <!-- Jobs Container -->
                    <div class="listings-container compact-list-layout margin-top-35">
                    @foreach($projects as $project)
                        <!-- Job Listing -->
                            <a href="single-job-page.html" class="job-listing with-apply-button">

                                <!-- Job Listing Details -->
                                <div class="job-listing-details" style="display:flex; justify-content:space-between;">

                                    <div style="display:flex; justify-content:space-between; align-items:center;">
                                        <!-- Logo -->
                                        <div class="job-listing-company-logo">
                                            <img src="{{ asset('newStyle/images/company-logo-01.png') }}" alt="">
                                        </div>

                                        <!-- Details -->
                                        <div class="row margin-left-20" style="align-items:center;">
                                            <div class="job-listing-description col-xl-7">
                                                <h3 class="job-listing-title">{{$project->name}}</h3>

                                                <!-- Job Listing Footer -->
                                                <div class="job-listing-footer">
                                                    <ul>
                                                        <li>
                                                            <i class="icon-feather-dollar-sign"></i> {{$project->budget}}
                                                            <div class="verified-badge" title="Verified Employer"
                                                                 data-tippy-placement="top"></div>
                                                        </li>
                                                        <li><i class="icon-material-outline-access-time"></i> 2 days ago
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="task-tags col-xl-5">
                                                <span>iOS</span>
                                                <span>Android</span>
                                                <span>mobile apps</span>
                                                <span>design</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Apply Button -->
                                    <span class="list-apply-button ripple-effect">Bidding</span>
                                </div>

                            </a>
                        @endforeach

                    </div>
                    <!-- Jobs Container / End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Featured Jobs / End -->


    <!-- Highest Rated Freelancers -->
    <div class="section padding-top-65 padding-bottom-70 full-width-carousel-fix">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline margin-top-0 margin-bottom-25">
                        <h3>Highest Rated Designers</h3>
                        <a href="freelancers-grid-layout.html" class="headline-link">Browse All Designers</a>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">

                    @foreach($designers as $designer)

                        <!--Freelancer -->
                            <div class="freelancer">

                                <!-- Overview -->
                                <div class="freelancer-overview">
                                    <div class="freelancer-overview-inner">
                                        <!-- Bookmark Icon -->
                                        <span class="bookmark-icon"></span>

                                        <!-- Avatar -->
                                        <div class="freelancer-avatar">
                                            <div class="verified-badge"></div>
                                            <a href="single-freelancer-profile.html"><img
                                                    src="{{ asset('newStyle/images/user-avatar-placeholder.png') }}"
                                                    alt=""></a>
                                        </div>

                                        <!-- Name -->
                                        <div class="freelancer-name">
                                            <h4><a href="#">{{$designer->name}}</a>
                                            </h4>
                                            <span>Marketing & advertising graphic designer</span>
                                        </div>

                                        <!-- Rating -->
                                        <div class="freelancer-rating">
                                            <div class="star-rating" data-rating="5.0"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Details -->
                                <div class="freelancer-details">
                                    <a href="single-freelancer-profile.html"
                                       class="button button-sliding-icon ripple-effect">View Profile <i
                                            class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>
                            <!-- Freelancer / End -->
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Highest Rated Freelancers / End-->

    @include('layouts.loginAndRegisterModal')

@endsection
