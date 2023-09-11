<?php $__env->startSection('title' , '| Admission Guidance'); ?>

<?php $__env->startSection('main_content'); ?>



<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url(<?php echo e(asset('/setting/service/' . $service->banner)); ?>)">
	<div class="container">
		<div class="page-title-content">
			<h2><?php echo e($service->title); ?></h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li><?php echo e($service->title); ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->


<section class="best-services-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<div class="tab-content">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="best-service-img">
								<img src="<?php echo e(asset('/setting/service/' . $service->image1)); ?>" alt="<?php echo e($service->title); ?>" class="img-fluid">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="best-service-area">
								<h3><?php echo e($service->title); ?></h3>
								<p><?php echo $service->details1; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/content/servicedetails.blade.php ENDPATH**/ ?>