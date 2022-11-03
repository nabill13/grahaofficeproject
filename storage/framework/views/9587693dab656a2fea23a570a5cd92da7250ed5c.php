<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin"><img src="<?php echo e(url('')); ?>/img/logo-sticky.png" data-retina="true" alt="" width="150"
            height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item <?php echo e(($nvb == 'dashboard') ? 'active' : ''); ?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="/admin">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(($nvb == 'users') ? 'active' : ''); ?>" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link" href="/admin/users">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Users</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(($nvb == 'rooms' || $nvb == 'services' || $nvb == 'roomtype') ? 'active' : ''); ?>" data-toggle="tooltip" data-placement="right" title="Rooms">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Room"
                    data-parent="#mylistings">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Rooms</span>
                </a>
                <ul class="sidenav-second-level collapse" id="Room">
                    <li class="<?php echo e(($nvb == 'rooms') ? 'active' : ''); ?>">
                        <a href="/admin/rooms">Rooms</a>
                    </li>
                    <li class="<?php echo e(($nvb == 'roomtype') ? 'active' : ''); ?>">
                        <a href="/admin/roomtype">Room Type</a>
                    </li>
                    <li class="<?php echo e(($nvb == 'services') ? 'active' : ''); ?>">
                        <a href="/admin/services">Services</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?php echo e(($nvb == 'paytype') ? 'active' : ''); ?>" data-toggle="tooltip" data-placement="right" title="Payment Type">
                <a class="nav-link" href="/admin/paytype">
                    <i class="fa fa-fw fa-credit-card"></i>
                    <span class="nav-link-text">Payment Type</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="messages.html">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">Messages</span>
                </a>
            </li>            
            <li class="nav-item <?php echo e(($nvb == 'bookings') ? 'active' : ''); ?>" data-toggle="tooltip" data-placement="right" title="Users">
                <a class="nav-link" href="/admin/bookings">
                    <i class="fa fa-fw fa-calendar-check-o"></i>
                    <span class="nav-link-text">Bookings</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My listings">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMylistings"
                    data-parent="#mylistings">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">My listings</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMylistings">
                    <li>
                        <a href="listings.html">Pending <span class="badge badge-pill badge-primary">6</span></a>
                    </li>
                    <li>
                        <a href="listings.html">Active <span class="badge badge-pill badge-success">6</span></a>
                    </li>
                    <li>
                        <a href="listings.html">Expired <span class="badge badge-pill badge-danger">6</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
                <a class="nav-link" href="reviews.html">
                    <i class="fa fa-fw fa-star"></i>
                    <span class="nav-link-text">Reviews</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
                <a class="nav-link" href="bookmarks.html">
                    <i class="fa fa-fw fa-heart"></i>
                    <span class="nav-link-text">Bookmarks</span>
                </a>
            </li>
            
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link" href="user-profile.html">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">My Profile</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                    data-parent="#Components">
                    <i class="fa fa-fw fa-gear"></i>
                    <span class="nav-link-text">Components</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="charts.html">Charts</a>
                    </li>
                    <li>
                        <a href="tables.html">Tables</a>
                    </li>
                </ul>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
                        <span class="badge badge-pill badge-primary">12 New</span>
                    </span>
                    <span class="indicator text-primary d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome!
                            These
                            messages clip off when they reach the end of the box so they don't overflow over to the
                            sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at
                            3:00 instead
                            of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When
                            you're able to
                            sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
                        <span class="badge badge-pill badge-warning">6 New</span>
                    </span>
                    <span class="indicator text-warning d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <span class="text-success">
                            <strong>
                                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                        </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems
                            are online.
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <span class="text-danger">
                            <strong>
                                <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                        </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems
                            are online.
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <span class="text-success">
                            <strong>
                                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                        </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems
                            are online.
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control search-top" type="text" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link" style="background-color:transparent; border : none;"><i class="fa fa-fw fa-sign-out"></i>Logout</a></button>
                </form>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/layout/navbar.blade.php ENDPATH**/ ?>