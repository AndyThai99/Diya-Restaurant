<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard-template/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard-template/assets/vendors/css/vendor.bundle.base.css')); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard-template/assets/css/style.css')); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('dashboard-template/assets/images/favicon.ico')); ?>" />
  </head>
  <body>

    <div class="container-scroller">
        <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid page-body-wrapper">
        <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>

    <?php echo $__env->make('layout.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('dashboard-template/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('dashboard-template/assets/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard-template/assets/js/jquery.cookie.js')); ?>" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('dashboard-template/assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard-template/assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard-template/assets/js/misc.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('dashboard-template/assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard-template/assets/js/todolist.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard-template/assets/js/functions-library.js')); ?>"></script>

    <?php echo $__env->yieldContent('page-js'); ?>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\LuanVan_PhamB1805905\Diya-Restaurant\resources\views/layout/main.blade.php ENDPATH**/ ?>