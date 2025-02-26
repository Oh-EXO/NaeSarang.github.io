<?php $__env->startSection('title','My Cutiepie'); ?>


<?php $__env->startSection('content'); ?>

<div  class="respon container-fluid">
    <img src="<?php echo e(asset('img/database.jpg')); ?>" alt="Avatar" class="respon"  >
  </div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        GAD Accomplishment Report 2023
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <object
          data="<?php echo e(asset('/pdf/GADAR/GAD_AR_2023-FINAL.pdf')); ?>"      type="application/pdf"
          width="80%"
          height="400px">
        </object>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Annual GAD Plan and Budget Report FY 2024
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <object
          data="<?php echo e(asset('/pdf/GADAR/Signed-GPB_FY2024_DILGCAR.pdf')); ?>"
          type="application/pdf"
          width="80%"
          height="400px">
        </object>
      </div>
    </div>
  </div>




  

  
</div>














<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\istra\Downloads\GAD\GAD\resources\views/pages/Cutie.blade.php ENDPATH**/ ?>