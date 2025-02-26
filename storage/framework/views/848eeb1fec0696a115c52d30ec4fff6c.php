<!---access main_view--->


<!---change title--->
<?php $__env->startSection('title','Suprise Daddy'); ?>

<!----CONTENT---->

<?php $__env->startSection('content'); ?>
<H2>CLICK ME BOSS!!!</H2>

<div  onclick="openPopup('popup1111')">
          <img class='thumb-image' src="<?php echo e(asset('img/sup.png')); ?>" >
  </div>
  <div class="popupaa" id="popup1111">
    <div class="popup-contentaa">
      <div class="gridab">
        <img onclick="openPopup('popup1a')"src="<?php echo e(asset('img/char.jpg')); ?>">
      </div>
      <h1>Congrats Mahal Daddy ka na 🎉🎊 </h1>
      <br>

      <button onclick="window.location.href='<?php echo e(url('/Sus')); ?>'">BOY OR GIRL ?</button>

    </div>
  </div>




  
  
  
  



<?php $__env->stopSection(); ?>





<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\istra\Downloads\GAD\GAD\resources\views/pages/Sup.blade.php ENDPATH**/ ?>