<?php $__env->startSection('title','Suprise Mahal'); ?>

<?php $__env->startSection('title_head'); ?>
    It's A Prank hahaha
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<H2>SURPRISE 😂😂😂!!!</H2>
<H6>Click mo ulit ako!!!</H6>

<div  onclick="openPopup('popup1111')">
          <img class='thumb-image' src="<?php echo e(asset('img/char.png')); ?>" >
  </div>
  <div class="popupaa" id="popup1111">
    <h1>Suprise Daddy Kevin 🎉</h1>
    <h4>Joke lang yun Daddy hahaha, Epal ka kasi eh yan tuloy hindi na kita natakot (¬`‸´¬) </h4>
    <div class="popup-contentaa">
      <div class="gridab">
        <img onclick="openPopup('popup1a')"src="<?php echo e(asset('img/supp.jpg')); ?>">
      </div>
      <h1>Suprise Daddy Kevin 🎉</h1>
      <h4>Joke lang yun Daddy hahaha, Epal ka kasi eh yan tuloy hindi na kita natakot (¬`‸´¬) </h4>
      <h4>Negative talaga result ko Daddy hahaha,tinupak lang ako kaya inedit ko na positive yung result </h4>
      <h4>(˵>ᗜ<˵)  </h4>

      <br>

      <button onclick="closePopup('popup1111')">Close</button>

    </div>
  </div>

<br>

































































































































<?php $__env->stopSection(); ?>


<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\istra\Downloads\GAD\GAD\resources\views/pages/Sus.blade.php ENDPATH**/ ?>