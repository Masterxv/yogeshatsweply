<?php echo $__env->make('front.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<div id="main-content">
    <?php echo $__env->yieldContent('main_content'); ?>
</div>
<?php echo $__env->make('front.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         <?php /**PATH C:\xampp\htdocs\sweply\resources\views/front/layout/master.blade.php ENDPATH**/ ?>