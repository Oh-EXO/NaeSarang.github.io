

<?php $__env->startSection('title','GADD'); ?>


<?php $__env->startSection('content'); ?>
<br>
<div class="card" style="width: 100%; border-color: transparent; text-align:center; height:100%">
  <div class="card-body" >
    <h2 class="bord">Gender and Development Activities</h2>

    <div class="gallery imgcont" onclick="openLightbox(event)">
      <img src="<?php echo e(asset('img/gad_act/photo1.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo2.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo3.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo4.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo5.jpg')); ?>">  
      <img src="<?php echo e(asset('img/gad_act/photo6.jpg')); ?>"> 
      <img src="<?php echo e(asset('img/gad_act/photo7.jpg')); ?>"> 
      <img src="<?php echo e(asset('img/gad_act/photo8.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo9.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo10.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo11.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo12.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo13.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo14.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo15.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo16.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo17.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo18.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo19.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo20.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo21.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo22.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo23.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo24.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo25.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo26.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo27.jpg')); ?>">
      <img src="<?php echo e(asset('img/gad_act/photo28.jpg')); ?>">
    </div> 
    
    <!-- Lightbox container -->
    <div id="lightbox">
      <!-- Close button -->
      <span id="close-btn" onclick="closeLightbox()">&times;</span>

      <!-- Main lightbox image -->
      <img id="lightbox-img" src="" alt="lightbox image">

      <!-- Thumbnails container -->
      <div id="thumbnail-container">
          <!-- Thumbnails will be added dynamically using JavaScript -->
      </div>

      <!-- Previous and Next buttons -->
      <button id="prev-btn" onclick="changeImage(-1)">&lt; Prev</button>
      <button id="next-btn" onclick="changeImage(1)">Next &gt;</button>
    </div>
    
  </div>
</div>


    

    


<br>



<script>
  let currentIndex = 0;
        const images = document.querySelectorAll('.gallery img');
        const totalImages = images.length;

        // Open the lightbox
        function openLightbox(event) {
            if (event.target.tagName === 'IMG') {
                const clickedIndex = Array.from(images).indexOf(event.target);
                currentIndex = clickedIndex;
                updateLightboxImage();
                document.getElementById('lightbox').style.display = 'flex';
            }
        }

        // Close the lightbox
        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
        }

        // Change the lightbox image based on direction (1 for next, -1 for prev)
        function changeImage(direction) {
            currentIndex += direction;
            if (currentIndex >= totalImages) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = totalImages - 1;
            }
            updateLightboxImage();
        }

        // Update the lightbox image and thumbnails
        function updateLightboxImage() {
            const lightboxImg = document.getElementById('lightbox-img');
            const thumbnailContainer = document.getElementById('thumbnail-container');

            // Update the main lightbox image
            lightboxImg.src = images[currentIndex].src;

            // Clear existing thumbnails
            thumbnailContainer.innerHTML = '';

            // Add new thumbnails
            // images.forEach((image, index) => {
            //     const thumbnail = document.createElement('img');
            //     thumbnail.src = image.src;
            //     thumbnail.alt = `Thumbnail ${index + 1}`;
            //     thumbnail.classList.add('thumbnail');
            //     thumbnail.addEventListener('click', () => updateMainImage(index));
            //     thumbnailContainer.appendChild(thumbnail);
            // });

            // Highlight the current thumbnail
            // const thumbnails = document.querySelectorAll('.thumbnail');
            // thumbnails[currentIndex].classList.add('active-thumbnail');
        }

        // Update the main lightbox image when a thumbnail is clicked
        function updateMainImage(index) {
            currentIndex = index; sdf
            updateLightboxImage();
        }

        // Add initial thumbnails
        updateLightboxImage();


        // To add keyboard navigation (left/right arrow keys)
        document.addEventListener('keydown', function (e) {
            if (document.getElementById('lightbox').style.display === 'flex') {
                if (e.key === 'ArrowLeft') {
                    changeImage(-1);
                } else if (e.key === 'ArrowRight') {
                    changeImage(1);
                }
            }
        });
</script>
 
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/pages/GAD_Activities/GAD_Acts.blade.php ENDPATH**/ ?>