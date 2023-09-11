<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo e(app_name()); ?>  <?php echo $__env->yieldContent('title'); ?></title>
	<meta name="description" content="<?php echo $__env->yieldContent('meta_description', app_name()); ?>">
	<meta name="keywords"
		content="Education Consultants, USA Study Visa, Study Visa, Study Abroad Consultants, Study Visa For USA, Study in USA, Grace Education, " />
	<link rel="canonical" href="index.html">
	<?php echo $__env->yieldContent('meta'); ?>
	<!-- responsive tag -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset(get_setting('favicon'))); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset(get_setting('favicon'))); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset(get_setting('favicon'))); ?>">
	<link rel="manifest" href="<?php echo e(asset(get_setting('favicon'))); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/fav.png')); ?>">

	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/bootstrap.min.css">
	<!-- Owl Theme Default Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/owl.theme.default.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/owl.carousel.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/animate.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/flaticon.css">
	<!-- Nice Select Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/nice-select.min.css">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/font-awesome.min.css">
	<!-- Imagelightbox Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/imagelightbox.min.css">
	<!-- Meanmenu Min CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/meanmenu.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend-new-old')); ?>/assets/css/responsive.css">



	<?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
	<!-- Start Preloader Area -->
	
	<!-- End Preloader Area -->

	<!-- Start Navbar Area -->
	<?php echo $__env->make('frontend.layout.frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- End Navbar Area -->

	<?php echo $__env->yieldContent('main_content'); ?>


	<?php echo $__env->make('frontend.layout.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<!-- Start Go Top Area -->
	<div class="go-top">
		<i class="fa fa-angle-double-up"></i>
		<i class="fa fa-angle-double-up"></i>
	</div>
	<!-- End Go Top Area -->




	<!-- Jquery Min JS -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/jquery.min.js"></script>
	<!-- Bootstrap Bundle Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/bootstrap.bundle.min.js"></script>
	<!-- Meanmenu Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/meanmenu.min.js"></script>
	<!-- Wow Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/wow.min.js"></script>
	<!-- Owl Carousel Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/owl.carousel.min.js"></script>
	<!-- Imagelightbox Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/imagelightbox.min.js"></script>
	<!-- Mixitup Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/mixitup.min.js"></script>
	<!-- Nice Select Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/nice-select.min.js"></script>
	<!-- Form Validator Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/form-validator.min.js"></script>
	<!-- Contact JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/contact-form-script.js"></script>
	<!-- Ajaxchimp Min JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/ajaxchimp.min.js"></script>
	<!-- Custom JS -->
	<script src="<?php echo e(asset('frontend-new-old')); ?>/assets/js/custom.js"></script>

	<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/layout/app.blade.php ENDPATH**/ ?>