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
    @include('layouts.loginAndRegisterModal')


    <!-- registration form -->
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5" style="padding: 0;">
                    <img src="{{ asset('images/registrationPhoto.jpg') }}" class="img-fluid" style="height: 100%;"
                         alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold px-5 py-3">Contact Us</h1>
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
                                <label for="Full-Name">Your Name:</label>
                                <input type="text" name="name" placeholder="Michael Scott"
                                       id="Full-Name"
                                       class="form-control mb-3 p-2" autofocus autocomplete="name" required>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-12">
                                <label for="details">Your Message:</label>
                                <textarea class="form-control mb-3 mt-1 p-2" id="details" name="details"
                                          placeholder="Enter Your message here"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
