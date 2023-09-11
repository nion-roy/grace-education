<?php $__env->startSection('title', ' Why Question'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">

			</div>
			<div class="card-body">
				<form class="form-horizontal" action="<?php echo e(route('admin.setting.why.store')); ?>" enctype="multipart/form-data" method="POST">
					<?php echo csrf_field(); ?>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Choose Icon</label>
						<input type="text" name="icon" class="form-control">
					</div>

					<div class="table-responsive">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>





</div>

<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Title</th>
						<th>Icon</th>
						<th>Active</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $why; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $why): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td> <?php echo e($why->title ?? 'N/A'); ?> </td>
						<td><?php echo e($why->icon ?? 'N/A'); ?></td>
						<td>
							<?php if($why->is_active == 1): ?>
							<button class="btn btn-sm btn-primary">Active</button>
							<?php elseif($why->is_active == 0): ?>
							<button class="btn btn-sm btn-danger">Deactive</button>
							<?php endif; ?>
						</td>
						<td>
							<a href="why/edit/<?php echo e($why->id); ?>" class="btn btn-success btn-sm">Edit</a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>

			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/why/index.blade.php ENDPATH**/ ?>