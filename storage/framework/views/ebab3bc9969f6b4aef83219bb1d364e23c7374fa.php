

<?php $__env->startSection('title', __('| Contact')); ?>

<?php $__env->startSection('main_content'); ?>

<?php $__env->startPush('css'); ?>
<style>
	.map iframe {
		width: 100%;
		height: 800px;
	}
</style>
<?php $__env->stopPush(); ?>



<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1" style="background-image:url(<?php echo e(asset('/setting/banner/' . $sliders->image)); ?>);">
	<div class="container">
		<div class="page-title-content">
			<h2>Contact Us</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Box Area -->
<section class="contact-box pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-box">
					<i class="fa fa-map-marker"></i>
					<div class="content-title">
						<h3>Address</h3>
						<p><?php echo e(get_setting('office_address')); ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-contact-box">
					<i class="fa fa-envelope"></i>
					<div class="content-title">
						<h3>Email</h3>
						<a href="<?php echo e(get_setting('office_email')); ?>"><?php echo e(get_setting('office_email')); ?></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
				<div class="single-contact-box">
					<i class="fa fa-phone"></i>
					<div class="content-title">
						<h3>Phone</h3>
						<a href="tel:+923078488738"><?php echo e(get_setting('office_phone')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Contact Box Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
	<div class="container">
		<div class="section-title">
			<h2>Drop us a message for any query</h2>
			<p>If you have an idea, we would love to hear about it.</p>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form">
					<form action="<?php echo e(route('frontend.contact.submit')); ?>" method="post">
						<?php echo csrf_field(); ?>
						<div class="row">
							<div class="col-md-12"> <span style="color:red;" id="error"></span><span style="color:green;" id="success"></span> </div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" id="clientname" name="name" class="form-control" placeholder="Your Name?">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" id="clientqualification" name="qualification" class="form-control" placeholder="What is your qualification?">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="email" id="clientemail" name="email" class="form-control" placeholder="Your Email is required">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="number" id="clientphone" name="phone" class="form-control" placeholder="Your phone is required?">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" id="clientinterest" name="interest" class="form-control" placeholder="Course of Interest for Study">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" id="clientprefer" name="prefer" class="form-control" placeholder="Country you Prefer for Study">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" id="clientmessage" name="message" cols="30" rows="5" placeholder="Your Message....."></textarea>
								</div>
							</div>

							<div class="col-lg-12">
								<button type="submit" class="default-btn btn-two">
									<span class="label">Send Message</span>
									<i class='bx bx-plus'></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="map">
					<?php echo get_setting('g_map_iframe_url'); ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Contact Area -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/content/contact.blade.php ENDPATH**/ ?>