<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#login">Log In</a></li>
            <li><a href="#register">Register</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Login -->
            <div class="popup-tab-content" id="login">
                @include('layouts.loginCode')
            </div>

            <!-- Register -->
            <div class="popup-tab-content" id="register">
                @include('layouts.registerCode')
            </div>

        </div>
    </div>
</div>
<!-- Sign In Popup / End -->
