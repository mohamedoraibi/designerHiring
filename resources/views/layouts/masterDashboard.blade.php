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



<!-- Dashboard Container -->
    <div class="dashboard-container">
        @include('layouts.sidebarDashboard')
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner">

                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Add a Project</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li>Add a Project</li>
                        </ul>
                    </nav>
                </div>

                @yield('content')
                @include('layouts.footerDashboard')

            </div>
            <!-- Dashboard Content / End -->
        </div>

    </div>

</div>
<!-- Wrapper / End -->
@include('layouts.loginAndRegisterModal')

@include('layouts.footerJS')

</body>
</html>
