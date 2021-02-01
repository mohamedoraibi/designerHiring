@extends('layouts.master')
@section('css')
    <style>
        .intro-benner1 {
            display: flex;
            flex-direction: row-reverse;
        }

        .intro-benner-img {
            margin-top: 20px;
            width: 100%;
            height: 82%;
        }

        .cat-1, .cat-2, .cat-3, .cat-4, .cat-5, .cat-6, .cat-7, .cat-8 {
            position: relative;
        }

        .cat-1::before, .cat-2::before, .cat-3::before, .cat-4::before, .cat-5::before, .cat-6::before, .cat-7::before, .cat-8::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("/newStyle/images/categories/webdesign.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            filter: brightness(0.6);
        }

        .cat-2::before {
            background-image: url("/newStyle/images/categories/graphic.jpg");

        }

        .cat-3::before {
            background-image: url("/newStyle/images/categories/animation.jpg");

        }

        .cat-4::before {
            background-image: url("/newStyle/images/categories/interior.jpg");

        }

        .cat-5::before {
            background-image: url("/newStyle/images/categories/motion.jpg");
        }

        .cat-6::before {
            background-image: url("/newStyle/images/categories/brand.png");
        }

        .cat-7::before {
            background-image: url("/newStyle/images/categories/uiux.jpg");
        }

        .cat-8::before {
            background-image: url("/newStyle/images/categories/archi.jpg");
        }

        .module-inside {
            position: relative;
        }

        .category-box-content > h3, .category-box-counter, .category-box-icon > i {
            color: white;
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
                                        <label for="intro-keywords" class="field-title ripple-effect">What are you
                                            looking
                                            for?</label>
                                        <input id="intro-keywords" type="text"
                                               placeholder="Project Title or a Designer">
                                    </div>

                                    <!-- Button -->
                                    <div class="intro-search-button">
                                        <button class="button ripple-effect"
                                                onclick="window.location.href='jobs-list-layout-full-page-map.html'">
                                            Search
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

                <div class="col-xl-6">
                    <img class="intro-benner-img"
                         src="/newStyle/images/undraw_winter.svg" alt="image">

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
                        <a href="/explore/projects" class="category-box cat-1 ">
                            <div class="module-inside">
                                {{--                                <div class="category-box-icon">--}}
                                {{--                                    <i class="icon-line-awesome-file-code-o"></i>--}}
                                {{--                                </div>--}}
                                <div class="category-box-content">
                                    <br>
                                    <h3>Web Designer</h3>
                                    <br>
                                    {{--                                <p>CMS, eCommerce, HTML5, JavaScript & More</p>--}}
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-2">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Graphic Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-3">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Animation Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-4">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Interior Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-5">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Motion Graphics Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-6">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Branding Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-7">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>UI/UX Designer</h3>
                                    <br>
                                </div>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="/explore/projects" class="category-box cat-8">
                            <div class="module-inside">
                                <div class="category-box-content">
                                    <br>
                                    <h3>Architectural Designer</h3>
                                    <br>
                                </div>
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
                            <h3>Latest Projects</h3>
                            <a href="/explore/projects" class="headline-link">Browse All Projects</a>
                        </div>

                        <!-- Jobs Container -->
                        <div class="listings-container compact-list-layout margin-top-35">
                        @foreach($projects as $project)
                            <!-- Job Listing -->
                                <a href="/project/explore/{{$project->id}}" class="job-listing with-apply-button">

                                    <!-- Job Listing Details -->
                                    <div class="job-listing-details"
                                         style="display:flex; justify-content:space-between;">

                                        <div style="display:flex; justify-content:space-between; align-items:center;">
                                            <!-- Logo -->
                                            <div class="job-listing-company-logo">
                                                <img src="/newStyle/images/company-logo-01.png" alt="">
                                            </div>

                                            <!-- Details -->
                                            <div class="row margin-left-20" style="align-items:center;">
                                                <div class="job-listing-description col-xl-8">
                                                    <h3 class="job-listing-title">{{$project->name}}</h3>

                                                    <!-- Job Listing Footer -->
                                                    <div class="job-listing-footer">
                                                        <ul>
                                                            <li>
                                                                <i class="icon-feather-dollar-sign"></i> {{$project->budget}}
                                                                <div class="verified-badge" title="Verified Employer"
                                                                     data-tippy-placement="top"></div>
                                                            </li>
                                                            <li>
                                                                <i class="icon-material-outline-access-time"></i> {{$project->created_at->diffForHumans()}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                {{--                                                <div class="task-tags col-xl-5">--}}
                                                {{--                                                    <span>iOS</span>--}}
                                                {{--                                                    <span>Android</span>--}}
                                                {{--                                                    <span>mobile apps</span>--}}
                                                {{--                                                    <span>design</span>--}}
                                                {{--                                                </div>--}}
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
                            <h3>Latest Designers</h3>
                            <a href="/explore/designers" class="headline-link">Browse All Designers</a>
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
                                                <a href="/profile/{{$designer->id}}"><img
                                                        src="/newStyle/images/user-avatar-placeholder.png"
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
                                        <a href="/profile/{{$designer->id}}"
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
