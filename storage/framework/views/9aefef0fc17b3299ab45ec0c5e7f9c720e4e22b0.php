<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Graha Office | Meeting Room Booking">
    <meta name="author" content="Ansonika">
    <title>Graha Office | <?php echo e($title); ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/logo.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo e(url('')); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(url('')); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo e(url('')); ?>/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo e(url('')); ?>/css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="/admin"><img src="<?php echo e(url('')); ?>/img/logo-sticky1.png" width="200" height="45" data-retina="true"
                        alt="" class="logo_sticky"></a>
            </figure>

            <form method="post" action="/login/req">   
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" autofocus>
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn_1 rounded full-width">Login to GrahaOffice</button>
                
            </form>
            <div class="copy">© 2022 GrahaOffice</div>
        </aside>
    </div>
    <!-- /login -->

    <!-- COMMON SCRIPTS -->
    <script src="<?php echo e(url('')); ?>/js/common_scripts.js"></script>
    <script src="<?php echo e(url('')); ?>/js/main.js"></script>
    <script src="<?php echo e(url('')); ?>/assets/validate.js"></script>

</body>

</html>
<?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/login/index.blade.php ENDPATH**/ ?>