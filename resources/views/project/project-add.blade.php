@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
@endsection
@section('title')
    Add New Project
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
                    <h3><i class="icon-feather-folder-plus"></i> Project Submission Form</h3>
                </div>
                <form method="POST" action="{{ route('projectAdd') }}" id="project-form">
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
                                    <h5>Project Name</h5>
                                    <input type="text" name="name" value="{{old('name')}}" id="name" class="with-border"
                                           placeholder="e.g. build me a website">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Budget</h5>
                                    <div class="input-with-icon">
                                        <input class="with-border" type="text" value="{{old('budget')}}" name="budget"
                                               id="budget"
                                               placeholder="e.g. 75$">
                                        <i class="currency">USD</i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="submit-field">
                                    <h5>Deadline </h5>
                                    <div class="">
                                        <div id="autocomplete-container">
                                            <input id="deadline" name="deadline" value="{{old('deadline')}}"
                                                   class="with-border"
                                                   type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="submit-field">
                                    <h5>What skills are required? <i class="help-icon" data-tippy-placement="right"
                                                                     title="Up to 5 skills that best describe your project"></i>
                                    </h5>
                                    <div class="keywords-container">
                                        <div class="keyword-input-container">
                                            <input type="text"
                                                   class="keyword-input with-border"
                                                   placeholder="Add Skills"/>
                                            <button class="keyword-input-button ripple-effect"><i
                                                    class="icon-material-outline-add"></i></button>
                                        </div>
                                        <div class="keywords-list"><!-- keywords go here --></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="submit-field">
                                <h5>Describe Your Project</h5>
                                <textarea cols="30" name="details" id="details" rows="5"
                                          class="with-border">{{old('details')}}</textarea>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <button class="button ripple-effect big margin-top-30" type="submit"
                form="project-form">Register
        </button>
    </div>

    <!-- Row / End -->

@endsection
