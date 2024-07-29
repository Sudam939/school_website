<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{route('dashboard')}}">
             <span class="logo-name">CODEIT SCHOOL</span>
        </a>
    </div>
    <ul class="sidebar-menu">

        <li class="menu-header">Main</li>
        <li class="dropdown active">
            <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>


        <li class="dropdown">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="settings"></i><span>Settings</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('school.index')}}">School Setup</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="{{route('notice.index')}}" class="nav-link"><i data-feather="monitor"></i><span>Notice</span></a>
        </li>

    </ul>
</aside>
