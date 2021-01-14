@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Manage Bidders
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <!-- Row -->
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">

                <!-- Headline -->
                <div class="headline">
                    <span>Bids for <a href="/project/explore/{{$Project->id}}">{{$Project->name}}</a></span>
                    <h3><i class="icon-material-outline-supervisor-account"></i> 3 Bidders</h3>
                    {{--                <div class="sort-by">--}}
                    {{--                    <select class="selectpicker hide-tick">--}}
                    {{--                        <option>Highest First</option>--}}
                    {{--                        <option>Lowest First</option>--}}
                    {{--                        <option>Fastest First</option>--}}
                    {{--                    </select>--}}
                    {{--                </div>--}}
                </div>

                <div class="content">
                    <ul class="dashboard-box-list">
                        <li>
                            <!-- Overview -->
                            <div class="freelancer-overview manage-candidates">
                                <div class="freelancer-overview-inner">

                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">
                                        <div class="verified-badge"></div>
                                        <a href="#"><img src="images/user-avatar-big-02.jpg" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="#">David Peterson </a></h4>


                                        <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>

                                    <!-- Bid Details -->
                                    <ul class="dashboard-task-info bid-info">
                                        <li><strong>$3,200</strong><span>Price</span></li>
                                        <li><strong>14 Days</strong><span>Delivery Time</span></li>
                                    </ul>

                                    <!-- Buttons -->
                                    <div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
                                        <a href="#small-dialog-1"  class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
                                        <a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                                        <a href="#small-dialog-3" class="button gray ripple-effect ico popup-with-zoom-anim button dark ripple-effect" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!-- Overview -->
                        <div class="freelancer-overview manage-candidates">
                            <div class="freelancer-overview-inner">

                                <!-- Avatar -->
                                <div class="freelancer-avatar">
                                    <a href="#"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                </div>

                                <!-- Name -->
                                <div class="freelancer-name">
                                    <h4><a href="#">Oldrich Ćuk</a></h4>


                                    <!-- Rating -->
                                    <br>
                                    <span class="company-not-rated">Minimum of 3 votes required</span>

                                    <!-- Bid Details -->
                                    <ul class="dashboard-task-info bid-info">
                                        <li><strong>$3,000</strong><span>Price</span></li>
                                        <li><strong>14 Days</strong><span>Delivery Time</span></li>
                                    </ul>

                                    <!-- Buttons -->
                                    <div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
                                        <a href="#small-dialog-1"  class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
                                        <a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                                        <a href="#small-dialog-3" class="button gray ripple-effect ico popup-with-zoom-anim button dark ripple-effect" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <!-- Overview -->
                        <div class="freelancer-overview manage-candidates">
                            <div class="freelancer-overview-inner">

                                <!-- Avatar -->
                                <div class="freelancer-avatar">
                                    <div class="verified-badge"></div>
                                    <a href="#"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                </div>

                                <!-- Name -->
                                <div class="freelancer-name">
                                    <h4><a href="#">Kuba Adamczyk</a></h4>

                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5.0"></div>
                                    </div>

                                    <!-- Bid Details -->
                                    <ul class="dashboard-task-info bid-info">
                                        <li><strong>$2,700</strong><span>Price</span></li>
                                        <li><strong>30 Days</strong><span>Delivery Time</span></li>
                                    </ul>

                                    <!-- Buttons -->
                                    <div class="buttons-to-right always-visible margin-top-25 margin-bottom-0">
                                        <a href="#small-dialog-1"  class="popup-with-zoom-anim button ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
                                        <a href="#small-dialog-2" class="popup-with-zoom-anim button dark ripple-effect"><i class="icon-feather-mail"></i> Send Message</a>
                                        <a href="#small-dialog-3" class="button gray ripple-effect ico popup-with-zoom-anim button dark ripple-effect" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>
<!-- Row / End -->

<!-- Bid Acceptance Popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab1">Accept Offer</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Accept Offer From <strong>David</strong></h3>
                    <div class="bid-acceptance margin-top-15">
                        $3200
                    </div>

                </div>

                <form id="terms">
                    <div class="radio">
						<input id="radio-1" name="radio" type="radio" required>
						<label for="radio-1"><span class="radio-label"></span>  I have read and agree to the Terms and Conditions</label>
					</div>
				</form>

				<!-- Button -->
				<button class="margin-top-15 button full-width button-sliding-icon ripple-effect" type="submit" form="terms">Accept <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Bid Acceptance Popup / End -->


<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog-2" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab2">Send Message</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab2">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Direct Message To <strong>David</strong></h3>
                </div>

                <!-- Form -->
                <form method="post" id="send-pm">
                    <textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
                </form>

                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i
                        class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
    <!-- Send Direct Message Popup / End -->


<!-- Remove Bid Popup
================================================== -->
<div id="small-dialog-3" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <ul class="popup-tabs-nav">
        <li><a href="#tab2">Remove Bid</a></li>
    </ul>

    <div class="popup-tabs-container">

        <!-- Tab -->
        <div class="popup-tab-content" id="tab2">

            <!-- Welcome Text -->
            <div class="welcome-text">
                <h3>Are You Sure You Want To Remove <strong>David</strong> From The Bidders List?</h3>
            </div>

            <!-- Button -->
            <button class="button full-width button-sliding-icon ripple-effect" type="button" form="send-pm">Remove <i
                    class="icon-material-outline-arrow-right-alt"></i></button>

        </div>

    </div>
</div>
    <!-- Remove Bid Popup / End -->

@endsection
