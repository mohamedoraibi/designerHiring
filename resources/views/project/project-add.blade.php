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
    <div class="container container-card">
        <div class="card1">
            <div class="card-center">
                <h1 class="font-weight-bold px-5 py-3 my-4">Project Details</h1>
                <form method="POST" action="{{ route('projectAdd') }}" class="px-5">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="name">Project name:</label>
                            <input class="form-control mb-3 mt-1 p-2" id="name" name="name"
                                   placeholder="Enter Project Name Ex: Logo design"
                                   required type="text">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="budget">Budget:</label>
                            <input class="form-control mb-3 mt-1 p-2" id="budget" name="budget"
                                   placeholder="Enter Project Budget Ex: $75" required
                                   type="number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="deadline">Deadline:</label>
                            <input class="form-control mb-3 mt-1 p-2" id="deadline" name="deadline" required
                                   type="date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="details">Details:</label>
                            <textarea class="form-control mb-3 mt-1 p-2" id="details" name="details"
                                      placeholder="Enter Project Details"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <button class="btn1 mt-3 mb-5" type="submit">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layouts.loginModal')
@endsection
