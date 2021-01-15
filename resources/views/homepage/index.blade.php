@extends('layouts.master')
@section('css')
    <style>
        .intro-benner1{
            display: flex;
            flex-direction: row-reverse;
        }
        .intro-benner-img{
            margin-top: 20px;
            width: 100%;
            height: 82%;
        }
    </style>
    <!-- {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">--}} -->
    <!-- {{--<link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">--}} -->
@endsection
@section('title')
    DesignChi
@endsection
@section('content')
    <!-- {{--    <form action="/tag" method="POST">--}}
    {{--        <input type="text" name="tag" value="html,input,tag" data-role="tagsinput">--}}
    {{--        @csrf--}}
    {{--        <input type="submit">--}}
    {{--    </form>--}} -->
    <!-- Intro Banner
    ================================================== -->

    <!-- add class "disable-gradient" to enable consistent background overlay -->
    <div class="section gray">
        <div class="container">
            <div class="row intro-benner1 flex-column-reverse flex-xl-row">
                <div class="col-xl-6 intro-banner">
                    <div class="container ">

                        <!-- Intro Headline -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="banner-headline" style="max-width: 100%">
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
                            <div class="col-xl-12">
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
                            <div class="col-xl-12">
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

                <div class="col-xl-6" >
                    <img class="intro-benner-img" src="{{ asset('newStyle/images/samples/undraw_winter_designer_a2m7.svg') }}" alt="">
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
                                <h3>Web Designer</h3>
                                <p>CMS, eCommerce, HTML5, JavaScript & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-cloud-upload"></i>
                            </div>
                            <div class="category-box-counter">113</div>
                            <div class="category-box-content">
                                <h3>Graphic Designer</h3>
                                <p>Logos, Brochures, Leaflets, Business Cards, Invitations, Packaging & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-full-page-map.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-suitcase"></i>
                            </div>
                            <div class="category-box-counter">186</div>
                            <div class="category-box-content">
                                <h3>Animation Designer</h3>
                                <p>Maya, 3ds Max, Cinema 4D, Blender, Photoshop, Flash, and After Effects & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-1.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pencil"></i>
                            </div>
                            <div class="category-box-counter">298</div>
                            <div class="category-box-content">
                                <h3>Interior Designer</h3>
                                <p>Designs the various aspects of a house/office/building, preferably according to the
                                    behaviour of the people who are supposed to use these spaces & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-list-layout-2.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-pie-chart"></i>
                            </div>
                            <div class="category-box-counter">549</div>
                            <div class="category-box-content">
                                <h3>Motion Graphics Designer</h3>
                                <p>Animated Graphics, Animated Presentations, Storyboards, Product Demo, Movie Title
                                    Sequence & More</p>
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
                                <h3>UI/UX Designer</h3>
                                <p>UI:Creates interfaces for mobile applications and other software programs. <br> UX:
                                    Responsible for creating user experiences by improving the design and usability of
                                    the interaction between the user and the product.</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="jobs-grid-layout-full-page.html" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-graduation-cap"></i>
                            </div>
                            <div class="category-box-counter">445</div>
                            <div class="category-box-content">
                                <h3>Architectural Designer</h3>
                                <p>Creates Plans for Buildings, Houses, and other places</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Boxes / End -->

    @if(!$projects->isEmpty())


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
                                    <div class="job-listing-details"
                                         style="display:flex; justify-content:space-between;">

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
                                                            <li><i class="icon-material-outline-access-time"></i> 2 days
                                                                ago
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
    @else
    @endif

    @if(!$designers->isEmpty())


        <!-- Designers -->
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
        <!--  Designers / End-->
    @else
    @endif
    @include('layouts.loginAndRegisterModal')

@endsection
