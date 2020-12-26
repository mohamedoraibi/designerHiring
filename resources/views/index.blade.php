@extends('layouts.master')

@section('content')
    <!--welcome screen-->
    <div class="welcome">
        <div class="welcome-text">
            <div>
                <h1>WELCOME</h1>
                <p>TO مصممين اونلاين</p>
                <hr width="150">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <div style="display: flex; margin-top: 30px;">
                <a href="#explore">
                    <button class="welcome-button">Explore</button>
                </a>
                <a href="Register.html">
                    <button class="btn1">Get Started</button>
                </a>
            </div>
        </div>
        <img alt="designer image" src="{{ asset('images/undraw_work_in_progress_uhmv.svg') }}" class="welcome-img">
    </div>

    @include('layouts.loginModal')

    <!-- explore -->

    <!--explore type-->
    <div class="explore-type-button" id="explore">
        <button class="btn-explore test">Designs</button>
        <button class="btn-explore">Projects</button>
    </div>

    <!--explore cards-->
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
            <div class="col-sm explore-card">
                <div class="card" style="width: 18rem; background-color:#2b2b2b;">
                    <img src="{{ asset('images/place-holder.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn1">something</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
