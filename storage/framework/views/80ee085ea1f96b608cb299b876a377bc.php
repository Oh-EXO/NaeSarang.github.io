<!---access main_view--->


<!---change title--->
<?php $__env->startSection('title','GAD Related Issuances'); ?>

<!----CONTENT---->

<?php $__env->startSection('title_head'); ?>
  GAD Related Issuances 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><b>ISSUANCES</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link tablinks"  href="#" onclick="openCity(event, 'SEAL')" id="defaultOpen">GAD Seal Certification Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" href="#" onclick="openCity(event, 'GFPS')">Restructuring GFPS</a>
          </li>
          <li class="nav-item dropdown drp">
            <a class="nav-link dropdown-toggle tablinks" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Other Policies
            </a>
            <ul class="dropdown-menu drp-cont">
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'ABRA')">Abra</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'APAYAO')">Apayao</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'BAGUIO')">Baguio</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'BENGUET')">Benguet</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'IFUGAO')">Ifugao</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'KALINGA')">Kalinga</a></li>
              <li><a class="dropdown-item tablinks" href="#" onclick="openCity(event, 'MP')">Mountain Province</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="SEAL" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">DILG-MC 2023-070_GAD Seal Certifications</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Issuances/DILG-MC 2023-070_GAD Seal Certifications.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>

  <div id="GFPS" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Restructuring Of The Dilg-Car Gender And Development Focal Point System (GFPS)</h5>
        <object

        data="<?php echo e(asset('/pdf/Issuances/RO 140-2023 Restructuring DILG CAR GFPS.pdf')); ?>"      type="application/pdf"
        class="pdf">
      </object>
        </div>         
    </div>
  </div> 
  <div id="ABRA" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Reconstitution of the DILG-ABRA Gender and Developmen Focal Point System (GFPS)</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/ABRA.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="APAYAO" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Institutionalization of DILG-APAYAO GFPS SUB-TWG</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/APAYAO.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="BAGUIO" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Constituing the DILG BAGUIO Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/BAGUIO.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="BENGUET" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Constituing the DILG-BENGUET Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/BENGUET.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="IFUGAO" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Designation of GAD GFPS-SUB TWG</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/IFUGAO.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="KALINGA" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Constituing the DILG-KALINGA Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/KALINGA.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>
  <div id="MP" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">Reconstitution of the Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group (SUB-TWG)</h5>
          <object
    
          data="<?php echo e(asset('/pdf/Policies/MP.pdf')); ?>"      
          type="application/pdf"
          class="pdf">
        </object>
        </div>         
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentz'); ?>
  <div class="card" style="width: 100%; border-color: transparent; text-align:center; height:100%">
    <div class="card-body">
      <div class="tab card" style="height: 500px; overflow:scroll">
 
        
        <div class="card-header" style="background-color: rgb(222, 199, 222)">
          <b>Programs</b>
        </div>
        <ul class="list-group list-group-flush" >
          <li class="list-group-item" >
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'SEAL')" id="defaultOpen">Gender And Development (GAD) Seal Certification Program For Dilg</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'GFPS')">Restructuring Of The Dilg-Car Gender And Development Focal Point System (GFPS)</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'WEB')">FY 2022 GAD Webinar</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'WALK')">Participation To The Gender Walk And Wellness Session For The Month Of April 2022</button>
           
          </li>
          
          <div class="card-header" style="background-color: rgb(222, 199, 222)">
            <b>OTHER POLICIES</b>
          </div>
        
          <li class="list-group-item">
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'ABRA')">ABRA</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'APAYAO')">APAYAO</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'BAGUIO')">BAGUIO</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'BENGUET')">BENGUET</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'IFUGAO')">IFUGAO</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'KALINGA')">KALINGA</button>
            <button class="tablinks" style="border: 1px solid #f2a3dc;" onclick="openCity(event, 'MP')">MOUNTAIN PROVINCE</button>
          </li>
        </ul>
      </div>
        
      
      
      
      <div id="SEAL" class="tabcontent">
        <div class="row justify-content-md-center text-center">        
            <div >
              <h5 class="bord">DILG-MC 2023-070_GAD Seal Certifications</h5>
              <object
        
              data="<?php echo e(asset('/pdf/Issuances/DILG-MC 2023-070_GAD Seal Certifications.pdf')); ?>"      
              type="application/pdf"
              width="80%"
              height="400px">
            </object>
            </div>         
        </div>
      </div>
      
      <div id="GFPS" class="tabcontent">
        <div class="row justify-content-md-center text-center">        
          <div >
            <h5 class="bord">Restructuring Of The Dilg-Car Gender And Development Focal Point System (GFPS)</h5>
            <object
    
            data="<?php echo e(asset('/pdf/Issuances/RO 140-2023 Restructuring DILG CAR GFPS.pdf')); ?>"      type="application/pdf"
            width="80%"
            height="400px">
          </object>
            </div>         
        </div>
      </div> 

    <div id="WEB" class="tabcontent">
      <div class="row justify-content-md-center text-center">        
        <div >
          <h5 class="bord">FY 2022 GAD Webinar</h5>
          <br>
          <object
    
            data="<?php echo e(asset('/pdf/Issuances/GAD-related_initiatives_GADbestpractices.pdf')); ?>"      type="application/pdf"
            width="80%"
            height="400px">
          </object>
        </div>         
      </div>
    </div> 

  <div id="WALK" class="tabcontent">
    <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Participation To The Gender Walk And Wellness Session For The Month Of April 2022</h5>
          <object
        
            data="<?php echo e(asset('/pdf/Issuances/RO 121-2022_GAD related activity.pdf')); ?>"      type="application/pdf"
            width="80%"
            height="400px">
          </object>
      </div>         
    </div>
  </div> 
      
      
      
      
      
      

<div id="ABRA" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">RECONSTITUTION OF THE DILG-ABRA Gender and Developmen Focal Point System (GFPS)</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/ABRA.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="APAYAO" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">INSTITUTIONALIZATION OF DILG-APAYAO GFPS SUB-TWG</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/APAYAO.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="BAGUIO" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Constituing the DILG BAGUIO Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/BAGUIO.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="BENGUET" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Constituing the DILG-BENGUET Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/BENGUET.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="IFUGAO" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">DESIGNATION OF GAD GFPS-SUB TWG</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/IFUGAO.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="KALINGA" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">Constituing the DILG-KALINGA Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group(TWG)</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/KALINGA.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>
<div id="MP" class="tabcontent">
  <div class="row justify-content-md-center text-center">        
      <div >
        <h5 class="bord">RECONSTITUTION OF THE Gender and Developmen Focal Point System (GFPS) Sub-Technical Working Group (SUB-TWG)</h5>
        <object
  
        data="<?php echo e(asset('/pdf/Policies/MP.pdf')); ?>"      
        type="application/pdf"
        width="80%"
        height="400px">
      </object>
      </div>         
  </div>
</div>



    </div>
  </div>
      </div>

  

      <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
      </script> 
        



<?php $__env->stopSection(); ?>

<?php echo $__env->make('main_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/pages/GAD_RI.blade.php ENDPATH**/ ?>