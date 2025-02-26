<?php $__env->startSection('title','GPBG'); ?>


<?php $__env->startSection('content'); ?>

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
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Other Report
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="list-group">
          <a href="#" target="_blank" class="fntc list-group-item list-group-item-action">TITLE NG REPORT</a>
        </div>
      </div>
    </div>
  </div>
</div>














<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\istra\Downloads\GAD\resources\views/pages/GPB_GADAR.blade.php ENDPATH**/ ?>