<div class="card">
    <div class="card-header with-border">
        <h3 class="card-title">Manage Result Setting </h3>
    </div>
    <div class="card-body">

        <?php echo e(html()->form('POST', route('admin.setting.volunteerSetting.store'))->open()); ?>



        <div class="form-group">
            <?php echo e(html()->label('Result Section Title')->for('volunteer_title')); ?>

            <?php echo e(html()->text('volunteer_title', get_setting('volunteer_title'))->class('form-control')); ?>

        </div> <!-- form-group-->

        <div class="form-group">
            <?php echo e(html()->label('Result Section Sort Description')->for('volunteer_description')); ?>

            <?php echo e(html()->textarea('volunteer_description', get_setting('volunteer_description'))->class('form-control')); ?>

        </div> <!-- form-group-->



        <div class="form-group ">
            <?php echo e(html()->button('Update')->class('btn btn-block  btn-primary')); ?>

        </div> <!-- form-group-->

        <?php echo e(html()->form()->close()); ?>


    </div> <!--  .card-body -->
</div> <!--  .card --><?php /**PATH D:\php 7.4\htdocs\student\student\resources\views/backend/content/settings/general/includes/volunteerSetting.blade.php ENDPATH**/ ?>