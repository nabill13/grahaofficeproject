<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Graha Office | <?php echo e($title); ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="<?php echo e(url('')); ?>/image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo e(url('')); ?>/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo e(url('')); ?>/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo e(url('')); ?>/img/logo.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo e(url('')); ?>/img/logo.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="<?php echo e(url('')); ?>/admin_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="<?php echo e(url('')); ?>/admin_assets/css/admin.css" rel="stylesheet">
    <!-- Icon fonts-->
    <link href="<?php echo e(url('')); ?>/admin_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Plugin styles -->
    <link href="<?php echo e(url('')); ?>/admin_assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Your custom styles -->
    <link href="<?php echo e(url('')); ?>/admin_assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo e(url('')); ?>/admin_assets/vendor/dropzone.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
</head>

<body class="fixed-nav sticky-footer" id="page-top">

    <?php echo $__env->make('admin.layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('container'); ?>

    <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/chart.js/Chart.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/jquery.selectbox-0.2.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/retina-replace.min.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(url('')); ?>/admin_assets/js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo e(url('')); ?>/admin_assets/js/admin-charts.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/js/admin-datatables.js"></script>
    <script src="<?php echo e(url('')); ?>/admin_assets/vendor/dropzone.min.js"></script>

</body>

</html>
<?php /**PATH C:\Users\ACER\Documents\GitHub\grahaoffice\resources\views/admin/layout/main.blade.php ENDPATH**/ ?>