<?php $__env->startSection('title', ' About Management'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?php echo e(route('admin.setting.faq.store')); ?>" enctype="multipart/form-data"
                        method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" name="question" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <textarea class="form-control" col="5" row="10" name="answer"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Page</label>
                            <select name="page_id" class="form-control">
                                <option value="">Select</option>
                                <option value="home">Home Page</option>
                                <?php $__currentLoopData = $destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($des->id); ?>"><?php echo e($des->title); ?> Page</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
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
                            <th>Page</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php if($f->page_id == 'home'): ?>
                                        Home Page
                                    <?php else: ?>
                                        <?php $__currentLoopData = $destination; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($f->page_id == $des->id): ?>
                                                <?php echo e($des->title); ?> Page
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($f->question ?? 'N/A'); ?></td>
                                <td><?php echo e($f->answer ?? 'N/A'); ?></td>
                                <td>
                                    <?php if($f->is_active == 1): ?>
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    <?php elseif($f->is_active == 0): ?>
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="faq/edit/<?php echo e($f->id); ?>" class="btn btn-success">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/faq/index.blade.php ENDPATH**/ ?>