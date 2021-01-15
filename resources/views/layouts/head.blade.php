<!-- Basic Page Needs
    ================================================== -->
<title>@yield('title')</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ asset('newStyle/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('newStyle/css/colors/purple.css') }}">
<style>
    .pagination li span, .pagination ul li a {
        font-size: 18px;
        width: 12px;
        height: 11px;
        line-height: 0;
        padding: 5px;
    }

    .pagination ul li a:hover {
        background-color: transparent;
        color: purple;
        box-shadow: none;
    }

    .pagination ul li a:last-child {
        padding-right: 15px;
    }

    .pagination ul {
        margin-top: 15px;
    }
</style>
@yield('css')
