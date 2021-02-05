@extends('layouts.master')
@section('css')
    <style>
        .paginationProfile {
            width: 35px !important;
            height: 50px !important;
            padding: 0 !important;
            line-height: 50px !important;
        }

        #paginationButtonLeft, #paginationButtonRight {
            line-height: 35px !important;
            font-size: 24px !important;
            margin-left: 0 !important;
            width: 34px !important;
            height: 50px !important;
        }


    </style>
@endsection
@section('title')
    {{$User->name}} | Designer
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <!-- Titlebar
    ================================================== -->
    <div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            <div class="header-image freelancer-avatar"><img src="images/user-avatar-big-02.jpg" alt="">
                            </div>
                            <div class="header-details">
                                <h3>
                                    {{$User->name}}
                                    <span>UI/UX Designer</span></h3>
                                <ul>
                                    <li>
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </li>
                                    <li>
                                        <div class="verified-badge-with-title">Verified</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div class="col-xl-8 col-lg-8 content-right-offset">

                <!-- Page Content -->
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">About Me</h3>
                    <p>{{$User->bio}}</p>
                </div>


                <!--Gallery-->
                <div class="section white padding-top-0">

                    <div class="boxed-list-headline margin-bottom-25">
                        <h3><i class="icon-material-outline-crop-original"></i> Gallery</h3>
                    </div>

                    <div class="row">

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>

                        <a href="#" class="blog-compact-item-container col-xl-4">
                            <div class="">
                                <img src="{{ asset('newStyle/images/blog-04a.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="clearfix"></div>
                <div class="pagination-container margin-top-20 margin-bottom-20">
                    <nav class="pagination">
                        <ul>
                            <li class="pagination-arrow "><a href="#" id="paginationButtonLeft"
                                                             class="ripple-effect "><i
                                        class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                            <li><a href="#" class="paginationProfile ripple-effect current-page">1</a></li>
                            <li><a href="#" class="ripple-effect paginationProfile">2</a></li>
                            <li><a href="#" class="ripple-effect paginationProfile">3</a></li>
                            <li><a href="#" class="ripple-effect paginationProfile">4</a></li>
                            <li class="pagination-arrow "><a href="#" id="paginationButtonRight"
                                                             class="ripple-effect paginationButton"><i
                                        class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="clearfix"></div>
                <!-- Pagination / End -->

                <!-- Gallery / End -->


                <!-- Boxed List -->
                <div class="boxed-list margin-bottom-60">
                    <div class="boxed-list-headline">
                        <h3><i class="icon-material-outline-business"></i> Employment History</h3>
                    </div>
                    <ul class="boxed-list-ul">
                        <li>
                            <div class="boxed-list-item">
                                <!-- Avatar -->
                                <div class="item-image">
                                    <img src="images/browse-companies-03.png" alt="">
                                </div>

                                <!-- Content -->
                                <div class="item-content">
                                    <h4>Development Team Leader</h4>
                                    <div class="item-details margin-top-7">
                                        <div class="detail-item"><a href="#"><i
                                                    class="icon-material-outline-business"></i> Acodia</a></div>
                                        <div class="detail-item"><i class="icon-material-outline-date-range"></i> May
                                            2019 - Present
                                        </div>
                                    </div>
                                    <div class="item-description">
                                        <p>Focus the team on the tasks at hand or the internal and external customer
                                            requirements.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="boxed-list-item">
                                <!-- Avatar -->
                                <div class="item-image">
                                    <img src="images/browse-companies-04.png" alt="">
                                </div>

                                <!-- Content -->
                                <div class="item-content">
                                    <h4><a href="#">Lead UX/UI Designer</a></h4>
                                    <div class="item-details margin-top-7">
                                        <div class="detail-item"><a href="#"><i
                                                    class="icon-material-outline-business"></i> Acorta</a></div>
                                        <div class="detail-item"><i class="icon-material-outline-date-range"></i> April
                                            2014 - May 2019
                                        </div>
                                    </div>
                                    <div class="item-description">
                                        <p>I designed and implemented 10+ custom web-based CRMs, workflow systems,
                                            payment solutions and mobile apps.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Boxed List / End -->

            </div>


            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">

                    <div class="row margin-bottom-25">

                        <!-- Button -->
                        <a href="#small-dialog" class="apply-now-button popup-with-zoom-anim margin-bottom-25 col-lg-6">Make
                            an Offer <i class="icon-material-outline-arrow-right-alt"></i></a>

                        <!-- Profile Overview -->
                        <div class="profile-overview col-lg-6">
                            <div class="overview-item"><strong>53</strong><span>Projects Done</span></div>
                        </div>
                    </div>

                    <!-- Freelancer Indicators -->
                    <div class="sidebar-widget">
                        <div class="freelancer-indicators">

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>88%</strong>
                                <div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
                                <span>Job Success</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>100%</strong>
                                <div class="indicator-bar" data-indicator-percentage="100"><span></span></div>
                                <span>Recommendation</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>90%</strong>
                                <div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
                                <span>On Time</span>
                            </div>

                            <!-- Indicator -->
                            <div class="indicator">
                                <strong>80%</strong>
                                <div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
                                <span>On Budget</span>
                            </div>
                        </div>
                    </div>


                    <!-- Widget -->
                    <div class="sidebar-widget">
                        <h3>Skills</h3>
                        <div class="task-tags">
                            <span>iOS</span>
                            <span>Android</span>
                            <span>mobile apps</span>
                            <span>design</span>
                            <span>Python</span>
                            <span>Flask</span>
                            <span>PHP</span>
                            <span>WordPress</span>
                        </div>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="sidebar-widget">
                        <h3>Bookmark or Share</h3>

                        <!-- Bookmark Button -->
                        <button class="bookmark-button margin-bottom-25">
                            <span class="bookmark-icon"></span>
                            <span class="bookmark-text">Bookmark</span>
                            <span class="bookmarked-text">Bookmarked</span>
                        </button>

                        <!-- Copy URL -->
                        <div class="copy-url">
                            <input id="copy-url" type="text" value="" class="with-border">
                            <button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url"
                                    title="Copy to Clipboard" data-tippy-placement="top"><i
                                    class="icon-material-outline-file-copy"></i></button>
                        </div>

                        <!-- Share Buttons -->
                        <div class="share-buttons margin-top-25">
                            <div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
                            <div class="share-buttons-content">
                                <span>Interesting? <strong>Share It!</strong></span>
                                <ul class="share-buttons-icons">
                                    <li><a href="#" data-button-color="#3b5998" title="Share on Facebook"
                                           data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
                                    <li><a href="#" data-button-color="#1da1f2" title="Share on Twitter"
                                           data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
                                    <li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus"
                                           data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
                                    <li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn"
                                           data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Spacer -->
    <div class="margin-top-15"></div>


    <!-- Make an Offer Popup
================================================== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#tab">Make an Offer</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Tab -->
                <div class="popup-tab-content" id="tab">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Discuss your project with {{$User->name}}</h3>
                    </div>

                    <!-- Form -->
                    <form method="POST" action="{{ route('offer') }}" id="bid-form" class="bidding-inner">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-block-helper mr-2"></i>
                                <ul>
                                    <div class="notification error closeable">
                                        <strong>Whoops!</strong> There is a problem with the input.<br><br>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                        <a class="close"></a>
                                    </div>
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" name="id_user_designer" value=" {{$User->id}}">
                        <div class="content with-padding padding-bottom-10 ">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>Project Name</h5>
                                        <input type="text" name="name" id="name" class="with-border"
                                               placeholder="e.g. build me a website">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Budget</h5>
                                        <div class="input-with-icon">
                                            <input class="with-border" id="price" name="price" type="number"
                                                   placeholder="e.g. 75$">
                                            <i class="currency">USD</i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Deadline </h5>
                                        <div class="">
                                            <div id="autocomplete-container">
                                                <input id="days" name="days" class="with-border" type="number"
                                                       placeholder="30 Days">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="submit-field">
                                        <h5>What skills are required? <i class="help-icon" data-tippy-placement="right"
                                                                         title="Up to 5 skills that best describe your project"></i>
                                        </h5>
                                        <div class="keywords-container">
                                            <div class="keyword-input-container">
                                                <input type="text" class="keyword-input with-border"
                                                       placeholder="Add Skills"/>
                                                <button class="keyword-input-button ripple-effect"><i
                                                        class="icon-material-outline-add"></i></button>
                                            </div>
                                            <div class="keywords-list"><!-- keywords go here --></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="submit-field">
                                    <h5>Describe Your Project</h5>
                                    <textarea cols="30" id="desc" rows="5" name="desc" class="with-border"></textarea>
                                </div>
                            </div>

                        </div>

                        <!-- Button -->
                        <button class="button full-width button-sliding-icon ripple-effect" type="submit">Make an Offer
                            <i
                                class="icon-material-outline-arrow-right-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
