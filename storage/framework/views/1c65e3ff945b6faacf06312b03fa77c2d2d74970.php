<?php $__env->startSection('title' , '| Blog'); ?>

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
<div class="page-title-area item-bg-1" style="background-image:url(<?php echo e(asset('/setting/blog/' . $banner->banner)); ?>);">
	<div class="container">
		<div class="page-title-content">
			<h2>Blog</h2>
			<ul>
				<li>
					<a href="/">
						Home
						<i class="fa fa-chevron-right"></i>
					</a>
				</li>
				<li>Blog</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<div class="blog-details-area pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<aside class="widget-area" id="secondary">
					<section class="widget widget-peru-posts-thumb">
						<h3 class="widget-title">Latest Posts</h3>

						<?php $__currentLoopData = $recent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<article class="item">
							<a href="/blog/details/<?php echo e($blog->id); ?>" class="thumb">
								<span class="fullimage cover bg1 img-fluid" role="img" style="background-image:url(<?php echo e(asset('/setting/blog/' . $blog->image1)); ?>);"></span>
							</a>
							<div class="info">
								<time datetime="2019-06-30"><?php echo e($blog->created_at->format('M d, Y')); ?></time>
								<h4 class="title usmall">
									<a href="/blog/details/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?></a>
								</h4>
							</div>

							<div class="clear"></div>
						</article>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</section>

					<section class="widget widget_categories">
						<h3 class="widget-title">Study Destination</h3>
						<ul>

							<?php $__currentLoopData = $destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $study): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a href="/study_destination/<?php echo e($study->id); ?>">Study in <?php echo e($study->title); ?></a>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</ul>
					</section>

				</aside>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="blog-details-wrap">
					<div class="row">
						
						<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-6 col-md-6">
							<div class="single-blog-post">
								<div class="post-image">
									<a href="/blog/details/<?php echo e($blog->id); ?>"><img src="<?php echo e(asset('/setting/blog/' . $blog->image1)); ?>" alt="" class="img-fluid"></a>
								</div>
								<div class="post-content">
									<div class="date">
										<i class="fa fa-calendar"></i>
										<span><?php echo e(($blog->created_at->format('d M Y'))); ?></span>
									</div>
									<h3>
										<a href="/blog/details/<?php echo e($blog->id); ?>"><?php echo e($blog->title ?? null); ?></a>
									</h3>
									<p>	<?php echo e(Str::limit($blog->short_details, 140)); ?></p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


						

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Blog Details Area -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/frontend/blog/index.blade.php ENDPATH**/ ?>