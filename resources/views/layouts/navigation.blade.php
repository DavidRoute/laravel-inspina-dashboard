<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                   <a href="{{ route('dashboard') }}">
                        <h3>GAME PJ</h3>
                    </a>
                </div>
            </li>

            <li class="dashboard {{ active_path() }}">
                <a href="{{ route('dashboard') }}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            
            <li class="{{ active_segment(2, 'users') }}">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Administrators</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="{{ active_path('users') }}">
                        <a href="{{ route('users.index') }}" ><i class="fa fa-user"></i> List</a>
                    </li>
                    <li class="{{ active_path('users/create') }}">
                        <a href="{{ route('users.create') }}"><i class="fa fa-user"></i> Add Admin</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>