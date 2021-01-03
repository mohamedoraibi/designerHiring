<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

@include('layouts.header')
@if(View::hasSection('titlebar'))
    <!-- Titlebar
================================================== -->
        <div id="titlebar" class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h2>@yield('title')</h2>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>@yield('title')</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endif



@yield('content')
<!-- Spacer -->
    <div class="margin-top-70"></div>
    <!-- Spacer / End-->

</div>
<!-- Wrapper / End -->
@include('layouts.footer')

@include('layouts.footerJS')

</body>
</html>
