@extends('layouts.master')
@section('css')
    <style>
        #pills-designs-tab, #pills-projects-tab {
            background: transparent;
        }

        #pills-designs-tab:hover, #pills-projects-tab:hover {
            color: chocolate;
        }

        svg {
            display: inline;
        }

        .icon-space {
            padding: 5px;
        }
    </style>
@endsection
@section('content')
    <!--welcome screen-->
    <div class="welcome">
        <div class="welcome-text">
            <div>
                <h1>WELCOME</h1>
                <p>TO <b><i>DesignChi</i></b></p>
                <hr width="150">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <div style="display: flex; margin-top: 30px;">
                <a href="#explore">
                    <button class="welcome-button">Explore</button>
                </a>
                <a href="{{url("/register")}}">
                    <button class="btn1">Get Started</button>
                </a>
            </div>
        </div>
        <img alt="designer image" src="{{ asset('images/undraw_work_in_progress_uhmv.svg') }}" class="welcome-img">
    </div>

    <ul class="nav nav-pills mb-3 explore-type-button" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active btn-explore" id="pills-designs-tab" data-toggle="pill" href="#pills-home"
               role="tab"
               aria-controls="pills-home" aria-selected="true">Designs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-explore" id="pills-projects-tab" data-toggle="pill" href="#pills-profile" role="tab"
               aria-controls="pills-profile" aria-selected="false">Projects</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-designs-tab">
            <div class="container" style="margin-top: 2%;">
                <div class="row">
                    @foreach($designers as $designer)

                        <div class="col-sm explore-card">
                            <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                                <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="nav-text-color">
                                        {{--                                        <i class="fas fa-user"></i>--}}
                                        <i class="fi-xnsuxl-user-solid icon-space"></i>{{$designer->name}}
                                    </p>
                                    <button type="button" class="btn1">Hire</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-projects-tab">
            <div class="container" style="margin-top: 2%;">
                <div class="row">
                    @foreach($projects as $project)

                        <div class="col-sm explore-card">
                            <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                                <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="nav-text-color">
                                        {{--                                        <i class="fas fa-user"></i>--}}
                                        <i class="fi-xnsuxl-bulb-solid icon-space"></i>{{$project->name}}
                                    </p>
                                    <p class="nav-text-color">
                                        <i class="fi-xnsuxl-dollar-solid icon-space"></i>{{$project->budget}}
                                    </p>
                                    <p class="nav-text-color">
                                        <i class="fi-xnsuxl-calendar-clock-solid icon-space"></i>{{$project->deadline}}
                                    </p>
                                    <button type="button" class="btn1">Bidding</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- explore -->

    {{--    <!--explore type-->--}}
    {{--    <div class="explore-type-button" id="explore">--}}
    {{--        <button class="btn-explore test">Designs</button>--}}
    {{--        <button class="btn-explore">Projects</button>--}}
    {{--    </div>--}}

    {{--    <!--explore cards-->--}}
    {{--    <div class="container" style="margin-top: 2%;">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-sm explore-card">--}}
    {{--                <div class="card" style="width: 18rem; background-color:#2b2b2b;">--}}
    {{--                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">--}}
    {{--                    <div class="card-body">--}}
    {{--                        <button type="button" class="btn1">something</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    @include('layouts.loginModal')

@endsection
