<?php $__env->startSection('content'); ?>
    Hi there peeps

    <?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <scriot>
        SCRIPT HERE!
    </scriot>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .hello {
            color: #ffffff;
        }
    </style>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>