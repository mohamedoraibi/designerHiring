@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Add New Skill
@endsection

@section('content')

    <!-- Dashboard Content
        ================================================== -->
    <!-- Row -->
    <div class="row">

        <!-- Dashboard Box -->
        <div class="col-xl-12">
            <div class="dashboard-box margin-top-0">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-feather-folder-plus"></i> Skill Submission Form</h3>
                </div>
                <form method="POST" action="{{ route('skillAdd') }}" id="skill-form">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="mdi mdi-block-helper mr-2"></i>
                            <ul>
                                <div class="notification error closeable">
                                    <strong>Whoops!</strong> There is a problem with the input.<br><br>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    <a class="close"></a>
                                </div>
                            </ul>
                        </div>
                    @endif
                    <div class="content with-padding padding-bottom-10 margin-left-50">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="submit-field">
                                    <h5>Skill Name</h5>
                                    <input type="text" name="name" value="{{old('name')}}" id="name" class="with-border"
                                           placeholder="e.g. web design">
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <button class="button ripple-effect big margin-top-30" type="submit"
                form="skill-form">Submit
        </button>
    </div>

    <!-- Row / End -->

@endsection
