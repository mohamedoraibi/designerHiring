@extends('layouts.master')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Log In
@endsection
@section('titlebar')
@endsection
@section('page-error')
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xl-5 offset-xl-3">

                <div class="login-register-page">
                    @include('layouts.loginCode')
                </div>

            </div>
        </div>
    </div>

    @include('layouts.loginAndRegisterModal')

@endsection
