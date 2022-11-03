<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin"><img src="{{ url('') }}/img/logo-sticky.png" data-retina="true" alt="" width="150"
            height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item {{ ($nvb == 'dashboard') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/admin">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ ($nvb == 'users') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link" href="/admin/users">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Users</span>
                </a>
            </li>
            <li class="nav-item {{ ($nvb == 'rooms' || $nvb == 'services' || $nvb == 'roomtype') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Rooms">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Room"
                    data-parent="#mylistings">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Rooms</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Room">
                    <li class="{{ ($nvb == 'rooms') ? 'active' : '' }}">
                        <a href="/admin/rooms">Rooms</a>
                    </li>
                    <li class="{{ ($nvb == 'roomtype') ? 'active' : '' }}">
                        <a href="/admin/roomtype">Room Type</a>
                    </li>
                    <li class="{{ ($nvb == 'services') ? 'active' : '' }}">
                        <a href="/admin/services">Services</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ ($nvb == 'paytype') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Payment Type">
                <a class="nav-link" href="/admin/paytype">
                    <i class="fa fa-fw fa-credit-card"></i>
                    <span class="nav-link-text">Payment Type</span>
                </a>
            </li>         
            <li class="nav-item {{ ($nvb == 'bookings') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link" href="/admin/bookings">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                    <span class="nav-link-text">Bookings</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link" style="background-color:transparent; border : none;"><i class="fa fa-fw fa-sign-out"></i>Logout</a></button>
                </form>
            </li>
        </ul>
    </div>
</nav>
