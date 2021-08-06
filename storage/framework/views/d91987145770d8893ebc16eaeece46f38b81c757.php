<?php echo $__env->make('front.layout.dashboard-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<?php echo $__env->make('front.layout.dashboard-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
<div id="main-content">
    <?php echo $__env->yieldContent('main_content'); ?>
</div>
<?php echo $__env->make('front.layout.dashboard-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<?php /**PATH C:\xampp\htdocs\sweply\resources\views/front/layout/dashboard-master.blade.php ENDPATH**/ ?>