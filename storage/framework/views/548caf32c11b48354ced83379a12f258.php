<?php $__env->startSection('title','GADD'); ?>


<?php $__env->startSection('title_head'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<style>
#carousel {
  perspective: 1200px;
  background: #100000;
  padding-top: 10%;
  font-size: 0;
  margin-bottom: 3rem;
  overflow: hidden;
}

#spinner {
  transform-style: preserve-3d;
  height: 300px;
  transform-origin: 50% 50% -500px;
  transition: transform 1s; /* Changed from 'transition: 1s;' to 'transition: transform 1s;' */
}

#spinner img {
  width: 40%;
  max-width: 425px;
  position: absolute;
  left: 30%;
  transform-origin: 50% 50% -500px;
  outline: 1px solid transparent;
}

#spinner img:nth-child(1) {
  transform: rotateY(0deg);
}

#spinner img:nth-child(2) {
  transform: rotateY(-45deg);
}

#spinner img:nth-child(3) {
  transform: rotateY(-90deg);
}

#spinner img:nth-child(4) {
  transform: rotateY(-135deg);
}

#spinner img:nth-child(5) {
  transform: rotateY(-180deg);
}

#spinner img:nth-child(6) {
  transform: rotateY(-225deg);
}

#spinner img:nth-child(7) {
  transform: rotateY(-270deg);
}

#spinner img:nth-child(8) {
  transform: rotateY(-315deg);
}

/* Retained span styles */
#carousel ~ span {
  color: #fff;
  margin: 5%;
  display: inline-block;
  text-decoration: none;
  font-size: 2rem;
  transition: 0.6s color;
  position: relative;
  margin-top: -6rem;
  border-bottom: none;
  line-height: 0;
}

#carousel ~ span:hover {
  color: #888;
  cursor: pointer;
}
</style>
<base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
<div id="carousel">
  <figure id="spinner">
    <img src="wanaka-tree.jpg" alt>
    <img src="still-lake.jpg" alt>
    <img src="pink-milford-sound.jpg" alt>
    <img src="paradise.jpg" alt>
    <img src="morekai.jpg" alt>
    <img src="milky-blue-lagoon.jpg" alt>
    <img src="lake-tekapo.jpg" alt>
    <img src="milford-sound.jpg" alt>
  </figure>
</div>

<script>
    var angle = 0;
    var spinner = document.getElementById("spinner");
    setInterval(function() {
        angle += 45;
        spinner.style.transform = "rotateY(" + angle + "deg)";
    }, 3000); // Rotate every 3 seconds (adjust the time interval as needed)
</script>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\istra\Downloads\GAD\resources\views/pages/home.blade.php ENDPATH**/ ?>