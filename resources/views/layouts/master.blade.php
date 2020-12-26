<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>مصممين اونلاين</title>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="background-color:#2b2b2b;">
    <div class="container-fluid mx-5">
        <a class="navbar-brand nav-text-color" href="index.html">مصممين اونلاين</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-left: 5%;">
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="index.html">Home</a>
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
                <img src="{{ asset('images/search.svg') }}" onclick="openSearch()" height="28" width="28" id="search"
                     style="margin-top:4px; cursor: pointer;"/>
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color" aria-current="page" href="#" data-bs-toggle="modal"
                       data-bs-target="#loginForm">Login</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link nav-text-color btn1" aria-current="page" href="Register.html">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- search bar -->
<div style="display:none;" id="searchBar">
    <div class="search">
        <div>
            <img src="{{ asset('images/search.svg') }}" height="28" width="25" style="cursor: pointer;"/>
            <input type="text" placeholder="Search" class="search-bar">
        </div>
        <img src="{{ asset('images/close.svg') }}" onclick="openSearch()" height="28" width="25"
             style="cursor: pointer;"/>
    </div>
</div>

@yield('content')

<!--footer-->
<footer>
    <p class="footer2">Made By "Muttaz" & "Mohammed"</p>
    <p class="footer2"> CS50X Iraq 2020©</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
