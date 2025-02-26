

<?php $__env->startSection('title','GADD'); ?>

<?php $__env->startSection('title_head'); ?>
    Gender and Development Activities 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#gallery">GALLERY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link tablinks"  href="#webinar">GAD Webinar FY 2022</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" href="#walk">Gender Walk and Wellness Session</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<section id="gallery">
  <div class="card " style="width: 100%; border-color: transparent; text-align:center; height:100%">
    <div class="card-body" >

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
</section>

<section id="webinar"></section>
  <div class="">
    <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">FY 2022 GAD Webinar</h5>
        <br>
        <object

          data="<?php echo e(asset('/pdf/Issuances/GAD-related_initiatives_GADbestpractices.pdf')); ?>"      type="application/pdf"
          class="pdf">
        </object>
      </div>         
    </div>
  </div>
</section>

<section id="walk"></section>
  <div class="">
    <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Participation To The Gender Walk And Wellness Session For The Month Of April 2022</h5>
          <object
        
            data="<?php echo e(asset('/pdf/Issuances/RO 121-2022_GAD related activity.pdf')); ?>"      type="application/pdf"
            class="pdf">
          </object>
      </div>         
    </div>
  </div> 
</section>

<script>
  // activitiesss-----------------

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

// ----------------------------------------

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/pages/GAD_Acts.blade.php ENDPATH**/ ?>