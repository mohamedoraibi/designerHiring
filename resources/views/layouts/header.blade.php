<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color:#2b2b2b;">
    <div class="container-fluid mx-5">
        <a class="navbar-brand nav-text-color" href="/">مصممين اونلاين</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-left: 5%;">
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="add-project.html">+Add Project</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="#">Contact Us</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="#">About Us</a>
            </ul>

            <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-left: auto;">
                <img alt="search icon" src="{{ asset('images/search.svg') }}" onclick="openSearch()" height="28"
                     width="28" id="search"
                     style="margin-top:4px; cursor: pointer;"/>
                @guest
                    <li class="nav-item px-3">
                        <a class="nav-link nav-text-color" aria-current="page" href="#" data-bs-toggle="modal"
                           data-bs-target="#loginForm">Login</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link nav-text-color btn1" aria-current="page" href="/register">Register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-text-color">{{ Auth::user()->name }} <a href="{{ url("logout") }}">logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- search bar -->
<div style="display:none;" id="searchBar">
    <div class="search">
        <div>
            <img alt="search icon" src="{{ asset('images/search.svg') }}" height="28" width="25"
                 style="cursor: pointer;"/>
            <input type="text" placeholder="Search" class="search-bar">
        </div>
        <img alt="close icon" src="{{ asset('images/close.svg') }}" onclick="openSearch()" height="28" width="25"
             style="cursor: pointer;"/>
    </div>
</div>
