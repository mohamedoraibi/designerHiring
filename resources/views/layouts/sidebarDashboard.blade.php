@section('Dashboard-nav')
    current
@endsection
<!-- Dashboard Sidebar
        ================================================== -->
<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>

            <!-- Navigation -->
            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">

                    <ul data-submenu-title="Start">
                        <li class="@yield('Dashboard')"><a href="/dashboard"><i
                                    class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                        <li class="@yield('Messages')"><a href="/messages"><i
                                    class="icon-material-outline-question-answer"></i>
                                Messages <span class="nav-tag">3</span></a></li>
                        <li class="@yield('Favorite')"><a href="/favorite"><i
                                    class="icon-material-outline-star-border"></i>
                                Favorite</a></li>
                        <li class="@yield('Reviews')"><a href="/reviews"><i
                                    class="icon-material-outline-rate-review"></i>
                                Reviews</a></li>
                    </ul>

                    <ul data-submenu-title="Administration">
                        <li class="@yield('Skills')"><a href="/skills"><i class="icon-line-awesome-tasks"></i>
                                Skills</a></li>
                        <li class="@yield('adminUsers')"><a href="/admin/users"><i class="icon-line-awesome-user"></i>
                                Users</a></li>
                        <li class="@yield('adminProjects')"><a href="/admin/projects"><i
                                    class="icon-material-outline-business-center"></i> Projects</a></li>
                    </ul>
                    <ul data-submenu-title="Management">
                        <li class="@yield('Projects')"><a href="#"><i class="icon-material-outline-business-center"></i>
                                Projects</a>
                            <ul>
                                <li><a href="/projects">Manage Projects
                                        {{--                                        <span class="nav-tag">{{$ProjectsCount}}</span>--}}
                                    </a>
                                </li>
                                {{--                                <li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>--}}
                                <li><a href="/project">Post a Project</a></li>
                            </ul>
                        </li>
                        <li class=" @yield('Tasks')"><a href="#"><i class="icon-material-outline-assignment"></i>
                                Tasks</a>
                            <ul>
                                {{--                                <li><a href="dashboard-manage-tasks.html">Manage Tasks <span--}}
                                {{--                                            class="nav-tag">2</span></a></li>--}}
                                <li><a href="/offers">Manage Hiring</a></li>
                                <li><a href="/bids">My Active Bids </a></li>
                                {{--                                <li><a href="dashboard-post-a-task.html">Post a Task</a></li>--}}
                            </ul>
                        </li>
                    </ul>
                    <ul data-submenu-title="Account">
                        <li class="@yield('Setting')"><a href="/profile/setting"><i
                                    class="icon-material-outline-settings"></i>
                                Settings</a></li>
                        <li><a href="index-logged-out.html">
                                <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button onclick="return confirm('Are you sure want to Sign out')"
                                            class="dropdown-item bg-danger text-white" type="submit"><i
                                            class="icon-material-outline-power-settings-new"></i> Logout
                                    </button>
                                </form>
                            </a></li>
                    </ul>

                </div>
            </div>
            <!-- Navigation / End -->

        </div>
    </div>
</div>
<!-- Dashboard Sidebar / End -->
