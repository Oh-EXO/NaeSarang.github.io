


<?php $__env->startSection('title','GPBG'); ?>

<?php $__env->startSection('title_head'); ?>
  Reports
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="text-center">
    <h4 class="bord"> GAD Accomplishment Report 2023 </h4>
    <br>
    <object
        
      data="<?php echo e(asset('/pdf/GADAR/GAD_AR_2023-FINAL.pdf')); ?>"      type="application/pdf"
      width="80%"
      height="400px">
    </object>

  </div>
    <br>  <br> 
    
  <div class="text-center">
    <h4 class="bord">Annual GAD Plan and Budget Report FY 2024</h4>
    <br>
    <object    
      data="<?php echo e(asset('/pdf/GADAR/Signed-GPB_FY2024_DILGCAR.pdf')); ?>"
      type="application/pdf"
      width="80%"
      height="400px">
    </object>
    
  </div>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/pages/GPB_GADAR.blade.php ENDPATH**/ ?>