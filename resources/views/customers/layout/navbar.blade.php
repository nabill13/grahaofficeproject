<header class="header menu_fixed">
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->
    <div id="logo">
        <a href="/">
            <img src="{{ url('') }}/img/logo-sticky.png" width="200" height="40" alt=""
                class="logo_normal">
            <img src="{{ url('') }}/img/logo-sticky1.png" width="200" height="40" alt=""
                class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        {{-- <li><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li> --}}
        {{-- <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li> --}}
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="/" class="{{ $nvb == 'home' ? 'border-bottom' : '' }}">Home</a></span></li>
            <li><span><a href="/rooms" class="{{ $nvb == 'rooms' ? 'border-bottom' : '' }}">Rooms</a></span></li>
            <li><span><a href="/about" class="{{ $nvb == 'about' ? 'border-bottom' : '' }}">About</a></span></li>

            <li class="mr-5"><span><a href="#"
                        class="{{ $nvb == 'history' || $nvb == 'account' ? 'border-bottom' : '' }}"><i
                            class="fa fa-fw fa-user"></i></a></span>
                <ul>
                    @if (isset(auth()->user()->id))
                        <li><a href="/account">Account</a></li>
                        <li><span><a href="/history">History</a></span></li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="nav-link"
                                    style="background-color:transparent; border : none; margin-top : 8px"><i
                                        class="fa fa-fw fa-sign-out"></i> Logout</a></button>
                            </form>
                        </li>
                    @else
                        <li><a href="#sign-in-dialog" id="sign-in" onclick="lgin()" class="login"
                                title="Sign In">Sign In</a>
                        </li>
                    @endif
                </ul>
            </li>

        </ul>
    </nav>
</header>
