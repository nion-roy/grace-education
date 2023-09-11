<?php $__env->startSection('title', ' About Management'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form class="form-horizontal" action="<?php echo e(route('admin.about.settings.update')); ?>" enctype="multipart/form-data" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="about_id" value="<?php echo e($about->id); ?>">
                    <div class="form-group">
                        <label>Banner Image One</label>
                        <input type="file" name="banner_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo e($about->title); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea class="form-control" col="10" row="5" name="short_description"><?php echo e($about->short_description ?? null); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>About Image</label>
                        <input type="file" name="about_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>About Image Two</label>
                        <input type="file" name="about_image_two" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>About Image Three</label>
                        <input type="file" name="about_image_three" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>About Description</label>
                        <textarea id="" class="editor form-control" col="10" row="3" name="description"><?php echo $about->description ?? null; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
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
            $(document).ready(function() {
                simple_editor('.editor4', 450);
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
            $(document).ready(function() {
                simple_editor('.editor2', 450);
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
            $(document).ready(function() {
                simple_editor('.editor3', 450);
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
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/about/edit.blade.php ENDPATH**/ ?>