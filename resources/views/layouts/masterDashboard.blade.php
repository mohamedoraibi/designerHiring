<!doctype html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

@include('layouts.header')

<!-- Dashboard Container -->
    <div class="dashboard-container">
        @include('layouts.sidebarDashboard')
        <div class="dashboard-content-container" data-simplebar>
            <div class="dashboard-content-inner">

                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>@yield('title')</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>@yield('title')</li>
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
@include('layouts.notification')

</body>
</html>
