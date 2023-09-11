<?php $__env->startSection('title', 'Mixed Settings'); ?>

<?php
$required = html()
->span('*')
->class('text-danger');
$demoImg = 'img/backend/front-logo.png';
?>

<?php $__env->startSection('content'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<?php
$multis = DB::table('services')
->where('is_active', 1)
->orwhere('is_active', 0)
->get();
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.setting.project.update')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Banner Image</label>
                        <input type="file" name="banner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image2</label>
                        <input type="file" name="image2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image3</label>
                        <input type="file" name="image3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" name="video" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo e($notice->title); ?>" class="form-control">
                        <input type="hidden" name="notice_id" value="<?php echo e($notice->id); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Short Details</label>
                        <input type="text" name="short_details" value="<?php echo e($notice->short_details); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Details Title</label>
                        <input type="text" name="details_title" value="<?php echo e($notice->details_title); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Details Description1</label>
                        <textarea type="text" rows="5" name="details" class="editor form-control"><?php echo $notice->details; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Details Description2</label>
                        <textarea type="text" rows="5" name="details_description" class="editor form-control"><?php echo $notice->details_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Details Description3</label>
                        <textarea type="text" rows="5" name="details_description2" class="editor form-control"><?php echo $notice->details_description2; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Active/Deactive</label>
                        <select class="form-control" name="is_active">
                            <option value="1" <?php if($notice->is_active == 1): ?> selected <?php endif; ?>>Active</option>
                            <option value="0" <?php if($notice->is_active == 0): ?> selected <?php endif; ?>>Deactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $__env->startPush('after-styles'); ?>
<?php echo e(style(asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css'))); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
<?php echo script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')); ?>

<?php echo script(asset('assets/plugins/tinymce/tinymce.min.js')); ?>

<?php echo script(asset('assets/plugins/tinymce/editor-helper.js')); ?>

<?php echo script(asset('assets/plugins/moment/moment.js')); ?>

<?php echo script(asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>


<script>
    $(document).ready(function() {
                simple_editor('.editor', 450);
                $('#datepicker-autoclose').datepicker({
                    format: "dd/mm/yyyy",
                    clearBtn: true,
                    autoclose: true,
                    todayHighlight: true,
                });

                $("#image").change(function() {
                    readImageURL(this, $('#holder'));
                });
            });

            $(document).on('blur', "#post_title", function() {
                let postField = $(this);
                let post_title = postField.val();
                if (post_title) {
                    ajax_slug_url(post_title);
                    setTimeout(update, 1000); // 30 seconds
                    $("#post_error").empty();
                    postField.removeClass('is-invalid');
                } else {
                    $("#post_error").text('Title must not empty');
                    postField.addClass('is-invalid');
                }
            });

            $(function() {
                $(".form-check-input").click(function() {
                    const status = $(this).val();
                    if (status === "schedule") {
                        $("#scheduleDate").removeClass("d-none");
                    } else if (status === "1") {
                        $("#for_New_upload").removeClass("d-none");
                    } else if (status === "0") {
                        $("#for_New_upload").addClass("d-none");
                    } else {
                        $("#scheduleDate").addClass("d-none");
                    }
                });

            });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/settings/study_destination/edit.blade.php ENDPATH**/ ?>