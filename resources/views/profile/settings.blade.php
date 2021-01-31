@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Settings
@endsection
@section('Setting')
    active-submenu
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
                    <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                </div>

                <div class="content with-padding padding-bottom-0">

                    <div class="row">

                        <div class="col-auto">
                            <div class="avatar-wrapper" data-tippy-placement="bottom"
                                 title="Change Avatar">
                                <img class="profile-pic" src="images/user-avatar-placeholder.png"
                                     alt=""/>
                                <div class="upload-button"></div>
                                <input class="file-upload" type="file" accept="image/*"/>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Full Name</h5>
                                        <input type="text" class="with-border" value="{{$User->name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Username</h5>
                                        <input type="text" class="with-border" value="{{$User->username}}">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <!-- Account Type -->
                                    <div class="submit-field">
                                        <h5>Account Type</h5>
                                        <div class="account-type">
                                            <div>
                                                <input type="checkbox" name="account-type-radio"
                                                       id="freelancer-radio" class="account-type-radio"
                                                       checked/>
                                                <label for="freelancer-radio"
                                                       class="ripple-effect-dark"><i
                                                        class="icon-material-outline-account-circle"></i>
                                                    Designer</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" name="account-type-radio"
                                                       id="employer-radio" class="account-type-radio"/>
                                                <label for="employer-radio"
                                                       class="ripple-effect-dark"><i
                                                        class="icon-material-outline-business-center"></i>
                                                    Project Owner</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Email</h5>
                                        <input type="text" class="with-border"
                                               value="{{$User->email}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="dashboard-box ">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-account-balance-wallet"></i> My Balance</h3>
                </div>

                <div class="content with-padding padding-bottom-0">

                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Balance</h5>
                                        <p>$400</p>
                                    </div>
                                </div>

                                <div class="col-xl-6" style="text-align: center">
                                    <div class="row" style="padding-left: 50px">
                                        <img src="{{ asset('newStyle/images/zaincash.png') }}" width="100px"
                                             alt="zain-cash-logo">
                                    </div>
                                    <div class="row">
                                        <div class="submit-field">
                                            <a href="#" class="button ripple-effect big margin-top-30">Recharge By Zain
                                                Cash</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <div class="dashboard-box">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-face"></i> My Profile</h3>
                    </div>

                    <div class="content">
                        <ul class="fields-ul">
                            <li>
                                <div class="row">
                                    <div class="submit-field col-xl-6">
                                        <h5>Skills <i class="help-icon" data-tippy-placement="right"
                                                      title="Add up to 10 skills"></i></h5>

                                        <!-- Skills List -->
                                        <div class="keywords-container">
                                            <div class="keyword-input-container">
                                                <input type="text" class="keyword-input with-border"
                                                       placeholder="e.g. Graphic Design, UI/UX"/>
                                                <button class="keyword-input-button ripple-effect"><i
                                                        class="icon-material-outline-add"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="keywords-list col-xl-4">
                                    <span class="keyword"><span class="keyword-remove"></span><span
                                            class="keyword-text">Angular</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span
                                                class="keyword-text">Vue JS</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span
                                                class="keyword-text">iOS</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span
                                                class="keyword-text">Android</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span
                                                class="keyword-text">Laravel</span></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Tagline</h5>
                                            <input type="text" class="with-border" value="UI/UX Designer">
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="submit-field">
                                            <h5>Date of Birth:</h5>
                                            <input type="date" class="input-text with-border"
                                                   value="{{$User->birth}}" name="birth" id="birth"
                                                   placeholder="Date of Birth" required/>

                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="submit-field">
                                            <h5>Introduce Yourself</h5>
                                            <textarea cols="30" rows="5"
                                                      class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Dashboard Box -->
            <div class="col-xl-12">
                <div id="test1" class="dashboard-box">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
                    </div>

                    <div class="content with-padding">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Current Password</h5>
                                    <input type="password" class="with-border">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>New Password</h5>
                                    <input type="password" class="with-border">
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Repeat New Password</h5>
                                    <input type="password" class="with-border">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="col-xl-12">
                <a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
            </div>

        </div>
        <!-- Row / End -->
@endsection
