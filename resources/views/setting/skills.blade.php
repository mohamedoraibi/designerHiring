@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    zz@endsection
@section('title')
    Skills
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <div class="col-xl-12">
        <div class="row">
            <a href="/skill">
                <button class="button ripple-effect big margin-top-30"
                        form="skill-form">Add Skill
                </button>
            </a>
        </div>
    </div>
    <br>
    <table id="skills" class="display table table-hover" style="width:100%">
        <thead>
        <tr>
            <th>Skill Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Skills as $Skill)
            <tr>

                <td>{{$Skill->name}}</td>
                <td><a href="">Edit</a> <a href="">Remove</a></td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>Skill Name</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    <!-- Row -->
    {{--    <div class="row">--}}

    {{--        <!-- Dashboard Box -->--}}
    {{--        <div class="col-xl-12">--}}
    {{--            <div class="dashboard-box margin-top-0">--}}

    {{--                <!-- Headline -->--}}
    {{--                <div class="headline">--}}
    {{--                    <h3><i class="icon-material-outline-assignment"></i> User Skills</h3>--}}
    {{--                </div>--}}

    {{--                <div class="content">--}}
    {{--                    <ul class="dashboard-box-list">--}}
    {{--                        <li>--}}
    {{--                            <!-- Job Listing -->--}}
    {{--                            <div class="job-listing width-adjustment">--}}

    {{--                                <!-- Job Listing Details -->--}}
    {{--                                <div class="job-listing-details">--}}

    {{--                                    <!-- Details -->--}}
    {{--                                    <div class="job-listing-description">--}}
    {{--                                        <h3 class="job-listing-title"><a href="#">Design a Landing Page</a> <span--}}
    {{--                                                class="dashboard-status-button yellow">Expiring</span></h3>--}}

    {{--                                        <!-- Job Listing Footer -->--}}
    {{--                                        <div class="job-listing-footer">--}}
    {{--                                            <ul>--}}
    {{--                                                <li><i class="icon-material-outline-access-time"></i> 23 hours left</li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <!-- Task Details -->--}}
    {{--                            <ul class="dashboard-task-info">--}}
    {{--                                <li><strong>3</strong><span>Bids</span></li>--}}
    {{--                                <li><strong>$22</strong><span>Avg. Bid</span></li>--}}
    {{--                            </ul>--}}

    {{--                            <!-- Buttons -->--}}
    {{--                            <div class="buttons-to-right always-visible">--}}
    {{--                                <a href="dashboard-manage-bidders.html" class="button ripple-effect"><i--}}
    {{--                                        class="icon-material-outline-supervisor-account"></i> Manage Bidders <span--}}
    {{--                                        class="button-info">3</span></a>--}}
    {{--                                <a href="#" class="button gray ripple-effect ico" title="Edit"--}}
    {{--                                   data-tippy-placement="top"><i class="icon-feather-edit"></i></a>--}}
    {{--                                <a href="#" class="button gray ripple-effect ico" title="Remove"--}}
    {{--                                   data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}

    {{--                        <li>--}}
    {{--                            <!-- Job Listing -->--}}
    {{--                            <div class="job-listing width-adjustment">--}}

    {{--                                <!-- Job Listing Details -->--}}
    {{--                                <div class="job-listing-details">--}}

    {{--                                    <!-- Details -->--}}
    {{--                                    <div class="job-listing-description">--}}
    {{--                                        <h3 class="job-listing-title"><a href="#">Food Delivery Mobile Application</a>--}}
    {{--                                        </h3>--}}

    {{--                                        <!-- Job Listing Footer -->--}}
    {{--                                        <div class="job-listing-footer">--}}
    {{--                                            <ul>--}}
    {{--                                                <li><i class="icon-material-outline-access-time"></i> 6 days, 23 hours--}}
    {{--                                                    left--}}
    {{--                                                </li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <!-- Task Details -->--}}
    {{--                            <ul class="dashboard-task-info">--}}
    {{--                                <li><strong>3</strong><span>Bids</span></li>--}}
    {{--                                <li><strong>$3,200</strong><span>Avg. Bid</span></li>--}}
    {{--                            </ul>--}}

    {{--                            <!-- Buttons -->--}}
    {{--                            <div class="buttons-to-right always-visible">--}}
    {{--                                <a href="dashboard-manage-bidders.html" class="button ripple-effect"><i--}}
    {{--                                        class="icon-material-outline-supervisor-account"></i> Manage Bidders <span--}}
    {{--                                        class="button-info">3</span></a>--}}
    {{--                                <a href="#" class="button gray ripple-effect ico" title="Edit"--}}
    {{--                                   data-tippy-placement="top"><i class="icon-feather-edit"></i></a>--}}
    {{--                                <a href="#" class="button gray ripple-effect ico" title="Remove"--}}
    {{--                                   data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}

    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
    <!-- Row / End -->
@endsection
@section("additionalJS")
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#skills').DataTable();
        });
    </script>
@endsection
