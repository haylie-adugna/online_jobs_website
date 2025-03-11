<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Navigation</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboards</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('admin.users.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Users</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('admin.permissions.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Permissions</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('admin.roles.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Roles</span>
                                <span class="pcoded-badge label label-info">NEW</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                        <span class="pcoded-mtext">Market</span>
                        <span class="pcoded-badge label label-danger">100+</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Statistic</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Data</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Chart Widget</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Jobs</span>
                        <span class="pcoded-badge label label-warning">NEW</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Today posts</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Ethiopia</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Remote</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Scholarship</span>
                    </a>
                </li>

            </ul>
            <div class="pcoded-navigation-label">App</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                        <span class="pcoded-mtext">To-Do</span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigation-label">Other</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                        <span class="pcoded-mtext">Menu Levels</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Menu Level 2.1</span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Menu Level 2.2</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Menu Level 3.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Menu Level 2.3</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('coming-soon') }}" class="disabled waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                        <span class="pcoded-mtext">Disabled Menu</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('coming-soon') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                        <span class="pcoded-mtext">Sample Page</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
