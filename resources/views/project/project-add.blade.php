@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Add New Project
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')



    <!-- Dashboard Content
        ================================================== -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Add a Project</h3>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>Add a Project</li>
                    </ul>
                </nav>
            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-feather-folder-plus"></i> Project Submission Form</h3>
                        </div>

                        <div class="content with-padding padding-bottom-10 margin-left-50">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="submit-field">
                                        <h5>Project Name</h5>
                                        <input type="text" class="with-border" placeholder="e.g. build me a website">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Budget</h5>
                                        <div class="input-with-icon">
                                            <input class="with-border" type="text" placeholder="e.g. 75$">
                                            <i class="currency">USD</i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="submit-field">
                                        <h5>Deadline </h5>
                                        <div class="">
                                            <div id="autocomplete-container">
                                                <input id="autocomplete-input" class="with-border" type="date"
                                                       placeholder="Anywhere">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-8">
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

                            <div class="col-xl-8">
                                <div class="submit-field">
                                    <h5>Describe Your Project</h5>
                                    <textarea cols="30" rows="5" class="with-border"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <a href="#" class="button ripple-effect big margin-top-30"> Publish</a>
            </div>

        </div>
        <!-- Row / End -->
        @include('layouts.footerDashboard')

    </div>
    <!-- Dashboard Content / End -->



@endsection
