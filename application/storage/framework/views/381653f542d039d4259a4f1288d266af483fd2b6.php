<!DOCTYPE html>
<html lang="en" class="logged-out">

<!--html header-->
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--html header-->

<body class="<?php echo e($page['page'] ?? ''); ?>">
    <!--preloader-->
    <div class="preloader">
        <div class="loader">
            <div class="loader-loading"></div>
        </div>
    </div>
    <!--preloader-->

    <!--main content-->
    <div id="main-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

<?php echo $__env->make('layout.footerjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--js automations-->
<?php echo $__env->make('layout.automationjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--[note: no sanitizing required] for this trusted content, which is added by the admin-->
<?php echo config('system.settings_theme_body'); ?>


</html><?php /**PATH C:\wamp64\www\tss-crm\application\resources\views/layout/wrapperplain.blade.php ENDPATH**/ ?>