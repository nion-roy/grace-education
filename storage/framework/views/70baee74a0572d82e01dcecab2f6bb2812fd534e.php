<?php $__env->startSection('title', ' FAQ About Video'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form class="form-horizontal" action="<?php echo e(route('admin.setting.faq_video.store')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>About FAQ Video</label>
                        <input type="file" name="video" class="form-control">
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
                        <th>Video</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $faq_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <video width="180" height="180" controls>
                                <source src="<?php echo e(asset('setting/testmonyt/') . $f->video); ?>" type="video/mp4">
                            </video>
                        </td>
                        <td>
                            <?php if($f->is_active == 1): ?>
                            <button class="btn btn-sm btn-primary">Active</button>
                            <?php elseif($f->is_active == 0): ?>
                            <button class="btn btn-sm btn-danger">Deactive</button>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="faq_video/edit/<?php echo e($f->id); ?>" class="btn btn-success"> <i class="fa fa-pencil"></i> Edit </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/faq_video/index.blade.php ENDPATH**/ ?>