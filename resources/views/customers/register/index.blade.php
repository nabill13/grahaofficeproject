<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Graha Office | Booking meeting rooms</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('') }}/css/style.css" rel="stylesheet">
	<link href="{{ url('') }}/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ url('') }}/css/custom.css" rel="stylesheet">
	
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="{{ url('') }}/img/logo-sticky1.png" width="200" height="45" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			<form autocomplete="off" method="POST" action="/register/req">
				@csrf
				<div class="form-group">
					<label>Your First Name</label>
					<input class="form-control" name="first_name" type="text" required autofocus>
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Last Name</label>
					<input class="form-control" name="last_name" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Username</label>
					<input class="form-control" name="username" type="text" required>
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Your Email</label>
					<input class="form-control" name="email" type="email" required>
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Your Phone</label>
					<input class="form-control" name="phone" type="text" required>
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Your password</label>
					<input class="form-control" name="password" type="password" id="password1" required>
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Confirm password</label>
					<input class="form-control" name="confirm_password" type="password" id="password2" required>
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="/login">Sign In</a></strong></div>
			</form>
			<div class="copy">?? 2022 GrahaOffice</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ url('') }}/js/common_scripts.js"></script>
    <script src="{{ url('') }}/js/main.js"></script>
	<script src="{{ url('') }}/assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ url('') }}/js/pw_strenght.js"></script>
	
  
</body>
</html>