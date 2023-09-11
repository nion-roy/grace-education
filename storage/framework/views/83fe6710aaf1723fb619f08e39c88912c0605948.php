<div class="peru-nav">
	<div class="navbar-area fixed-top">
		<!-- Menu For Mobile Device -->
		<div class="mobile-nav">
			<a href="index.html" class="logo">
				<img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" alt="" class="img-fluid shadow" style="width: 62px">
			</a>
		</div>

		<?php
		$projects = DB::table('projects')
		->where('is_active', 1)
		->get();
		$services = DB::table('services')
		->where('is_active', 1)
		->get();
		?>

		<!-- Menu For Desktop Device -->
		<div class="main-nav peru-nav-style-2">
			<nav class="navbar navbar-expand-md navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="<?php echo e(asset(get_setting('frontend_logo_menu'))); ?>" alt="" class="img-fluid shadow"
							style="width: 62px">
					</a>

					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a href="/" class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>">Home</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo e(route('about.index')); ?>" class="nav-link <?php echo e(request()->is('about*') ? 'active' : ''); ?>">About Us</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle <?php echo e(request()->is('study_destination*') ? 'active' : ''); ?>">Study Destination</a>
								<ul class="dropdown-menu dropdown-style">

									<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="nav-item">
										<a class="nav-link" href="/study_destination/<?php echo e($project->id); ?>">Study In <?php echo e($project->title); ?></a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link dropdown-toggle <?php echo e(request()->is('service*') ? 'active' : ''); ?>">Services </a>
								<ul class="dropdown-menu dropdown-style">

									<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="nav-item">
										<a class="nav-link" href="/service/<?php echo e($service->id); ?>"><?php echo e($service->title); ?></a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</ul>
							</li>

							<li class="nav-item">
								<a href="/blogs" class="nav-link <?php echo e(request()->is('blog*') ? 'active' : ''); ?>">Blog</a>
							</li>
							<li class="nav-item">
								<a href="/contact" class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>">Contact</a>
							</li>
						</ul>
						<div class="others-option">
							<a class="default-btn" href="#">
								Login
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/layout/frontend/header.blade.php ENDPATH**/ ?>