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
                    <h1 class="font-weight-bold px-5 py-3">About Us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur corporis culpa
                        deserunt, dignissimos doloribus expedita natus odio optio placeat provident quasi ratione
                        similique tenetur ut vero, voluptates! Eos, officiis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur corporis culpa
                        deserunt, dignissimos doloribus expedita natus odio optio placeat provident quasi ratione
                        similique tenetur ut vero, voluptates! Eos, officiis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur corporis culpa
                        deserunt, dignissimos doloribus expedita natus odio optio placeat provident quasi ratione
                        similique tenetur ut vero, voluptates! Eos, officiis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur corporis culpa
                        deserunt, dignissimos doloribus expedita natus odio optio placeat provident quasi ratione
                        similique tenetur ut vero, voluptates! Eos, officiis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur corporis culpa
                        deserunt, dignissimos doloribus expedita natus odio optio placeat provident quasi ratione
                        similique tenetur ut vero, voluptates! Eos, officiis.</p>
                </div>

            </div>
        </div>
    </section>

@endsection
