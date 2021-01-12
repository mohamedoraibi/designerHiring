@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    test
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
<div class="col-xl-9 col-lg-8 content-left-offset">

    <h3 class="page-title">Search Results</h3>

    <div class="notify-box margin-top-15">
        <div class="sort-by">
            <span>Sort by:</span>
            <select class="selectpicker hide-tick">
                <option>Relevance</option>
                <option>Newest</option>
                <option>Oldest</option>
                <option>Random</option>
            </select>
        </div>
    </div>

    <!-- Tasks Container -->
    <div class="tasks-list-container compact-list margin-top-35">
        
        <!-- Task -->
        <a href="single-task-page.html" class="task-listing">

            <!-- Job Listing Details -->
            <div class="task-listing-details">

                <!-- Details -->
                <div class="task-listing-description">
                    <h3 class="task-listing-title">Food Delviery Mobile App</h3>
                    <ul class="task-icons">
                        <li><i class="icon-material-outline-access-time"></i> 2 minutes ago</li>
                    </ul>
                    <p class="task-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.</p>
                    <div class="task-tags">
                        <span>iOS</span>
                        <span>Android</span>
                        <span>mobile apps</span>
                        <span>design</span>
                    </div>
                </div>

            </div>

            <div class="task-listing-bid">
                <div class="task-listing-bid-inner">
                    <div class="task-offers">
                        <strong>$1,000 - $2,500</strong>
                        <span>Fixed Price</span>
                    </div>
                    <span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
                </div>
            </div>
        </a>
        
    </div>
    <!-- Tasks Container / End -->


    <!-- Pagination -->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <!-- Pagination -->
            <div class="pagination-container margin-top-60 margin-bottom-60">
                <nav class="pagination">
                    <ul>
                        <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                        <li><a href="#" class="ripple-effect">1</a></li>
                        <li><a href="#" class="current-page ripple-effect">2</a></li>
                        <li><a href="#" class="ripple-effect">3</a></li>
                        <li><a href="#" class="ripple-effect">4</a></li>
                        <li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Pagination / End -->
</div>
@endsection
