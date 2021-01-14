@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Project Bid
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <!-- Titlebar
    ================================================== -->
    <div class="single-page-header" data-background-image="images/single-task.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-page-header-inner">
                        <div class="left-side">
                            {{--                            <div class="header-image"><a href="single-company-profile.html"><img--}}
                            {{--                                        src="images/browse-companies-02.png" alt=""></a></div>--}}
                            <div class="header-details">
                                <h3>{{$Project->name}}</h3>
                                <h5>About the Employer</h5>
                                <ul>
                                    <li><a href="single-company-profile.html"><i
                                                class="icon-material-outline-business"></i> Acue</a></li>
                                    <li>
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </li>
                                    <li>
                                        <div class="verified-badge-with-title">Verified</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="salary-box">
                                <div class="salary-type">Project Budget</div>
                                <div class="salary-amount">{{$Project->budget}}</div>
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

                <!-- Description -->
                <div class="single-page-section">
                    <h3 class="margin-bottom-25">Project Description</h3>
                    <p>{{$Project->details}}</p>


                </div>

                <!-- Skills -->
                <div class="single-page-section">
                    <h3>Skills Required</h3>
                    <div class="task-tags">
                        <span>iOS</span>
                        <span>Android</span>
                        <span>mobile apps</span>
                        <span>design</span>
                    </div>
                </div>
                <div class="clearfix"></div>

                <!-- Freelancers Bidding -->
                <div class="boxed-list margin-bottom-60">
                    <div class="boxed-list-headline">
                        <h3><i class="icon-material-outline-group"></i> Freelancers Bidding</h3>
                    </div>
                    <ul class="boxed-list-ul">
                        <li>
                            <div class="bid">
                                <!-- Avatar -->
                                <div class="bids-avatar">
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="single-freelancer-profile.html"><img
                                                src="images/user-avatar-big-01.jpg" alt=""></a>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="bids-content">
                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag"
                                                                                                    src="images/flags/gb.svg"
                                                                                                    alt=""
                                                                                                    title="United Kingdom"
                                                                                                    data-tippy-placement="top"></a>
                                        </h4>
                                        <div class="star-rating" data-rating="4.9"></div>
                                    </div>
                                </div>

                                <!-- Bid -->
                                <div class="bids-bid">
                                    <div class="bid-rate">
                                        <div class="rate">$4,400</div>
                                        <span>in 7 days</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>


            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-container">
                    <div class="countdown green margin-bottom-35">The Deadline is <b>{{$deadline->diffForHumans()}}</b>
                    </div>

                    <div class="sidebar-widget">
                        <div class="bidding-widget">
                            <div class="bidding-headline"><h3>Bid on this project!</h3></div>
                            <form method="POST" action="{{ route('bidding') }}" id="bid-form" class="bidding-inner">
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
                            <!-- Headline -->
                                <span class="bidding-detail">Set your <strong>Request budget</strong></span>

                                <!-- Price Slider -->
                                <div class="bidding-value">$<span id="biddingVal"></span></div>
                                <input class="bidding-slider" type="text" value="price" id="price" name="price"
                                       data-slider-handle="custom" data-slider-currency="$" data-slider-min="0"
                                       data-slider-max="{{$Project->budget}}" data-slider-value="auto"
                                       data-slider-step="1"
                                       data-slider-tooltip="hide"/>

                                <input type="hidden" id="id_user_designer">
                                <input type="hidden" id="id_user_project_owner">

                                <!-- Headline -->
                                <span
                                    class="bidding-detail margin-top-30">Set your <strong>Delivery time</strong></span>

                                <!-- Fields -->
                                <input type="number" value="{{old('days')}}" id="days" name="days" min="1"
                                       class="margin-top-15"
                                       required>

                                <!-- Headline -->
                                <span
                                    class="bidding-detail margin-top-30">Write your <strong>Notes</strong></span>

                                <!-- Fields -->
                                <input type="text" value="{{old('notes')}}" id="notes" name="notes"
                                       class="margin-top-15">
                                <input type="hidden" value="{{$Project->id}}" id="id_project" name="id_project"
                                       class="margin-top-15">

                                <!-- Button -->
                                <button id="snackbar-place-bid"
                                        form="bid-form"
                                        class="button ripple-effect move-on-hover full-width margin-top-30"><span>Place a Bid</span>
                                </button>

                            </form>
                            @guest
                                <div class="bidding-signup">Don't have an account?
                                    <a href="#sign-in-dialog" class="register-tab sign-in popup-with-zoom-anim">Sign
                                        Up</a>
                                </div>
                            @endguest
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
    <!-- Spacer / End-->
@endsection
