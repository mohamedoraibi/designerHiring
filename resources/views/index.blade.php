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
    <img src="{{ asset('images/undraw_work_in_progress_uhmv.svg') }}" class="welcome-img">
</div>

<!-- Login modal -->
<div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="exampleModalLabel" style="padding-top: 32px;"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="login-modal modal-content">
            <div class="modal-header" style="border-bottom: solid;">
                <h2 class="modal-title" id="exampleModalLabel" style="margin-left: 10%;">Sign in</h2>
                <button type="button" class="btn-close" style="background-color: #cfb48d; margin-right: 10px;"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body center-modal">
                <form action="#" class="px-5">
                    <div class="form-row">
                        <div class="col-lg-12">
                            <input type="email" placeholder="E-mail Address" class="form-control my-3 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <input type="password" placeholder="Password" class="form-control my-3 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <button type="button" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
