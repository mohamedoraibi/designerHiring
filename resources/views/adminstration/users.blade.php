@extends('layouts.masterDashboard')
@section('css')
    <style>


    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    zz@endsection
@section('title')
    All Users
@endsection
@section('adminUsers')
    active-submenu
@endsection
{{--@section('titlebar')--}}
{{--@endsection--}}
@section('content')
    <div class="col-xl-12">
        <div class="row">
            <a href="/skill">
                <button class="button ripple-effect big margin-top-30"
                        form="skill-form">Add User
                </button>
            </a>
        </div>
    </div>
    <br>
    <table id="skills" class="display table table-hover" style="width:100%">
        <thead>
        <tr>
            <th>User Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($users) && $users->count())
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="/skill/{{$user->id}}"
                           title="Edit"
                           data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                        <a href="/skill/remove/{{$user->id}}"
                           onclick="return confirm('Are you sure want to remove the project ({{$user->name}}?)')"
                           title="Remove"
                           data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">There are no data.</td>
            </tr>
        @endif
        </tbody>
        <tfoot>
        <tr>
            <th>User Name</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    <div class="pagination">
        {!! $users->links() !!}
    </div>

@endsection
@section("additionalJS")
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#skills').DataTable({
                "paging": false,
            });
        });
    </script>
@endsection
