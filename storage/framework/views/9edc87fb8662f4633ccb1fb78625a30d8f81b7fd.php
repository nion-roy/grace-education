<!-- Start Footer Top Area -->
<section class="footer-top-area pt-100 pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-widget">
					<a href="index.html">
						<img src="<?php echo e(asset(get_setting ('frontend_logo_footer'))); ?> " alt="White-Logo" style="width: 70px">
					</a>
					<p><?php echo e(get_setting('footer_description')); ?></p>
					<ul class="address">
						<li>
							<i class="fa fa-map-marker"></i>
							<?php echo e(get_setting('office_address')); ?>

						</li>
						<li>
							<i class="fa fa-phone"></i>
							<a href="<?php echo e(get_setting('office_phone')); ?>"><?php echo e(get_setting('office_phone')); ?></a>
						</li>
						<li>
							<i class="fa fa-envelope"></i>
							<a href="<?php echo e(get_setting('office_email')); ?>"><?php echo e(get_setting('office_email')); ?></a>
						</li>
						<div class="widget widget_email mt-0">
							<form>
								<label>
									<input type="email" name="EMAIL" placeholder="Your email address" class="form-control" required="">
									<button type="submit" class="submit"><i class="fa fa-paper-plane"></i></button>
								</label>
							</form>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-widget">
					<h3>Links</h3>
					<ul class="links">
						<li>
							<a href="/">Home</a>
						</li>
						<li>
							<a href="/about">About Us</a>
						</li>
						<li>
							<a href="/blogs">Blog</a>
						</li>
						<li>
							<a href="/contact">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>

			<?php
			$projects = DB::table('projects')
			->where('is_active', 1)
			->get();
			$services = DB::table('services')
			->where('is_active', 1)
			->get();
			?>

			<div class="col-lg-3 col-md-6">
				<div class="single-widget">
					<h3>Study Destination</h3>
					<ul class="links">
						<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<a href="/study_destination/<?php echo e($project->id); ?>">Study In <?php echo e($project->title); ?></a>
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>

				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-widget">
					<h3>Our Services</h3>
					<ul class="links">
						<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="/service/<?php echo e($service->id); ?>"> <?php echo e($service->title); ?> </a> </li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Footer Top Area -->

<!-- Start Footer Bottom Area -->
<footer class="footer-bottom-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div>
					<p>
						<?php echo e(get_setting('copyright_text')); ?> | Developed by <a href="https://www.techwebdit.com" target="_blank">Techweb BD IT</a>
					</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<ul class="social-icon">
					<li>
						<a href="<?php echo e(get_setting('facebook')); ?>" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo e(get_setting('twitter')); ?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo e(get_setting('instagram')); ?>" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo e(get_setting('youtube')); ?>" target="_blank">
							<i class="fa fa-youtube"></i>
						</a>
					</li>
					<li>
						<a href="<?php echo e(get_setting('linkedin')); ?>" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Bottom Area --><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/layout/frontend/footer.blade.php ENDPATH**/ ?>