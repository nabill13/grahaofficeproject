<header class="header menu_fixed">
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->
    <div id="logo">
        <a href="/">
            <img src="<?php echo e(url('')); ?>/img/logo-sticky.png" width="200" height="40" alt=""
                class="logo_normal">
            <img src="<?php echo e(url('')); ?>/img/logo-sticky1.png" width="200" height="40" alt=""
                class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        
        <?php if(isset(auth()->user()->id)): ?>
            <li>
                <form action="/logout" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="nav-link"
                        style="background-color:transparent; border : none; margin-top : 8px"><i
                            class="fa fa-fw fa-sign-out"></i> Logout</a></button>
                </form>
            </li>
        <?php else: ?>
            <li><a href="#sign-in-dialog" id="sign-in" onclick="lgin()" class="login" title="Sign In">Sign In</a>
            </li>
        <?php endif; ?>
        
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
            <li><span><a href="/" class="<?php echo e($nvb == 'home' ? 'border-bottom' : ''); ?>">Home</a></span></li>
            <li><span><a href="/rooms" class="<?php echo e($nvb == 'rooms' ? 'border-bottom' : ''); ?>">Rooms</a></span></li>
            <li><span><a href="/about" class="<?php echo e($nvb == 'about' ? 'border-bottom' : ''); ?>">About</a></span></li>
            <?php if(isset(auth()->user()->id)): ?>
                <li><span><a href="/history" class="<?php echo e($nvb == 'history' ? 'border-bottom' : ''); ?>">History</a></span></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/customers/layout/navbar.blade.php ENDPATH**/ ?>