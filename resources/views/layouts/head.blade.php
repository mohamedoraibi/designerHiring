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

@yield('css')
