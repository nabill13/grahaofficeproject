<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>GrahaOffice | {{ $title }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="{{ url('') }}/image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ url('') }}/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ url('') }}/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ url('') }}/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ url('') }}/img/logo.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('') }}/admin_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('') }}/css/vendors.css" rel="stylesheet">    

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ url('') }}/css/custom.css" rel="stylesheet">


</head>

<body class="datepicker_mobile_full">
    <div id="page">
        @include('customers.layout.navbar')

        @yield('container')
        
        @include('customers.layout.footer')
    </div>

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form action="/login/req" method="POST">
            @csrf
            <div class="sign-in-wrapper">
                {{-- <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div> --}}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        {{-- <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> --}}
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                <div class="text-center">
                    Don’t have an account? <a href="/register">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred
                        one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div><!-- Back to top button -->

    <script>
        function lgin(){
            $('#sign-in').click();
        }
    </script>

    <!-- COMMON SCRIPTS -->
    <script src="{{ url('') }}/js/common_scripts.js"></script>
    <script src="{{ url('') }}/js/main.js"></script>
    <script src="{{ url('') }}/assets/validate.js"></script>

    <!-- DATEPICKER  -->
    <script>
        $(function() {
            'use strict';
            $('input[name="dates"]').daterangepicker({
                autoUpdateInput: false,
                minDate: new Date(),
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format(
                    'MM-DD-YY'));
            });
            $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>

    <!-- INPUT QUANTITY  -->
    <script src="{{ url('') }}/js/input_qty.js"></script>

</body>

</html>
