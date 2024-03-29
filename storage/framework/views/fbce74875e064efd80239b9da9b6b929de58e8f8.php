

<?php $__env->startSection('title', ' General Settings '); ?>

<?php
    $required = html()
        ->span('*')
        ->class('text-danger');
    $demoImg = 'img/backend/front-logo.png';
?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        General Settings
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-sm-4">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                                    role="tab" aria-controls="vert-tabs-home" aria-selected="true">General Settings</a>

                                <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                                    role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Logo Settings</a>
                                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill"
                                    href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages"
                                    aria-selected="false">Social Settings</a>
                                <a class="nav-link" id="vert-tabs-smsConfigSetting-tab" data-toggle="pill"
                                    href="#vert-tabs-smsConfigSetting" role="tab"
                                    aria-controls="vert-tabs-smsConfigSetting" aria-selected="false">SMS Configuration
                                    Setting</a>

                                <a class="nav-link" id="vert-tabs-bannerSetting-tab" data-toggle="pill"
                                    href="#vert-tabs-highlight" role="tab" aria-controls="vert-tabs-highlight"
                                    aria-selected="false">Highlight Setting</a>
                                <a class="nav-link" id="vert-tabs-bannerSetting-tab" data-toggle="pill"
                                    href="#vert-tabs-bannerSetting" role="tab" aria-controls="vert-tabs-bannerSetting"
                                    aria-selected="false">About Setting</a>
                                <a class="nav-link" id="vert-tabs-volunteerSetting-tab" data-toggle="pill"
                                    href="#vert-tabs-volunteerSetting" role="tab"
                                    aria-controls="vert-tabs-volunteerSetting" aria-selected="false">Result Section
                                    Setting</a>


                                <a class="nav-link" id="vert-tabs-homebackbg-tab" data-toggle="pill"
                                    href="#vert-tabs-homebackbg" role="tab" aria-controls="vert-tabs-homebackbg"
                                    aria-selected="false">Home Background Setting</a>
                            </div>
                        </div>
                        <div class="col-7 col-sm-8">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                                    aria-labelledby="vert-tabs-home-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.siteSetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                    aria-labelledby="vert-tabs-profile-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.logoSetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                                    aria-labelledby="vert-tabs-messages-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-smsConfigSetting" role="tabpanel"
                                    aria-labelledby="vert-tabs-smsConfigSetting-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.smsConfigSetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>

                                <div class="tab-pane fade" id="vert-tabs-bannerSetting" role="tabpanel"
                                    aria-labelledby="vert-tabs-bannerSetting-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.bannerSetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-highlight" role="tabpanel"
                                    aria-labelledby="vert-tabs-highlight-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.highlight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-homebackbg" role="tabpanel"
                                    aria-labelledby="vert-tabs-homebackbg-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.homebackbg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-volunteerSetting" role="tabpanel"
                                    aria-labelledby="vert-tabs-volunteerSetting-tab">
                                    <?php echo $__env->make('backend.content.settings.general.includes.volunteerSetting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div> <!-- col -->


    </div> <!-- .row -->

<?php $__env->stopSection(); ?>




<?php $__env->startPush('after-scripts'); ?>
    <?php echo script(asset('assets/plugins/tinymce/jquery.tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/tinymce.min.js')); ?>

    <?php echo script(asset('assets/plugins/tinymce/editor-helper.js')); ?>

    <script>
        function readImageURL(input, preview) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $(document).ready(function() {
            small_editor('#invoice_site_address', 200);

            $(".image").change(function() {
                holder = $(this).closest('.form-group').find('.holder');
                readImageURL(this, holder);
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/settings/general/general.blade.php ENDPATH**/ ?>