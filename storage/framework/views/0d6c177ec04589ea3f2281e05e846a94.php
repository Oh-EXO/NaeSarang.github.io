<!------FOOTER-------->
<footer class="footer" >

    <div class="con_image-container">
        <img src="<?php echo e(asset('img/bannerF.jpg')); ?>" alt="Image" class=" img-fluid" width="100%">

        <div class="con_thumbnail-overlay">
            

            <div class="popupf">
                <a href="https://www.facebook.com/dilgcar" target="__blank">
                    <img src="<?php echo e(asset('img/face.png')); ?>" alt="Image 1" width="500" height="500" >
                </a>
            </div>
          <!-- First Image -->
            <div class="popupf" onclick="togglePopup('popupt')">
                <img src="<?php echo e(asset('img/email.png')); ?>" alt="Image 1" width="500" height="500">
                <span class="popuptextr" id="popupt">dilgcargad@gmail.com</span>
            </div>

            <!-- Second Image -->
            <div class="popupf" onclick="togglePopup('popupr')">
                <img src="<?php echo e(asset('img/phone.png')); ?>" alt="Image 2" width="500" height="500">
                <span class="popuptextr" id="popupr">(074) 422 3644</span>
            </div>

        </div>
    </div>

    
    <div class="card-footer text-muted text-center" style="background-image: linear-gradient(to top left,#EC4899, #8B5CF6);margin:0%">

        
         Copyright © 2024. All Rights Reserved.
    </div>

<script>
// Function to toggle popup visibility
function togglePopup(popupId) {
  var popupff = document.getElementById(popupId);
  popupff.classList.toggle("showf");
}
</script>

</footer>
<?php /**PATH C:\Users\istra\Downloads\GAD\resources\views/layouts/footer.blade.php ENDPATH**/ ?>