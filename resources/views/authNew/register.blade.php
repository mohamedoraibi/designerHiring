@extends('layouts.master')

@section('css')
    <style>
        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .row {
            background-color: #2b2b2b;;
            color: #cfb48d;
            border-radius: 30px;
        }
    </style>
@endsection

@section('content')
    @include('layouts.loginModal')


    <!-- registration form -->
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5" style="padding: 0;">
                    <img src="{{ asset('images/registrationPhoto.jpg') }}" class="img-fluid" style="height: 100%;"
                         alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold px-5 py-3">Registration</h1>
                    <form method="POST" action="{{ route('register') }}" class="px-5">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-block-helper mr-2"></i>
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                {{--                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                                {{--                                    <span aria-hidden="true">×</span>--}}
                                {{--                                </button>--}}
                            </div>
                        @endif
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="Full-Name">Full Name:</label>
                                <input type="text" name="name" placeholder="Michael Scott"
                                       id="Full-Name"
                                       class="form-control mb-3 p-2" autofocus autocomplete="name" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="username">Username:</label>
                                <input type="text" placeholder="Prison Mike" name="username" id="username"
                                       class="form-control mb-3 p-2"
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="birth">Date Of Birth:</label>
                                <input type="date" id="birth" name="birth" class="form-control mb-3 p-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="email">E-mail Address:</label>
                                <input type="email" placeholder="michaelscott@gmail.com" name="email" id="email"
                                       class="form-control mb-3 p-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="password">Password:</label>
                                <input type="password" placeholder="********" id="password" name="password"
                                       class="form-control mb-3 p-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <label for="password_confirmation">Confirm password:</label>
                                <input type="password" placeholder="********" name="password_confirmation"
                                       id="password_confirmation"
                                       class="form-control mb-3 p-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <input type="checkbox" value="1" class="form-check-input" id="is_designer"
                                       name="is_designer">
                                <label for="is_designer">I'm a Designer</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-9">
                                <input type="checkbox" value="1" class="form-check-input" name="is_project_owner"
                                       id="is_project_owner">
                                <label for="is_project_owner">I'm a Project Owner</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Register</button>
                            </div>
                        </div>
                        <p>Already registered? <a href="#" class="custom-link-style" data-bs-toggle="modal"
                                                  data-bs-target="#loginForm">Press here to Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
