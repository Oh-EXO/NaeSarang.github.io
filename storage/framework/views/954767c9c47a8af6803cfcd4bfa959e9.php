<img src="<?php echo e(asset('img/bannerHead.jpg')); ?>"  class=" img-fluid position-relative" width="100%" height="20%"  >

<nav class="navbar navbar-expand-sm"  style="background-image: linear-gradient(to top left, #8B5CF6, #EC4899); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
    
    <a class="navbar-brand" href="/">
        <img src="<?php echo e(asset('img/DILG_Logo.png')); ?>" alt="Logo" width="35" height="35" class="d-inline-block" style="margin-left: 20%; padding-top:0">
        
        <a class="navbar-brand" href="/" >
            <b>GAD CORNER</b>
        </a>
    </a>
    
    <button
                class="navbar-toggler d-lg-none cl"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavId" >
        <ul class="navbar-nav me-auto " >
            <li class="nav-item">
                
                <a class="active" href="/" aria-current="page">
                    <span class="visually-hidden">(current)</span> 
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('GADPh.index')); ?>">About</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('GAD_RI.index')); ?>">GAD Related Issuances</a>
            </li>

            <li class="nav-item dropdown ">
                <a href="<?php echo e(route('GAD_Acts.index')); ?>">GAD Activities</a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('GPB.index')); ?>">GPB & GADAR</a>
            </li>

            <li class="nav-item">
                <a href="<?php echo e(route('db.index')); ?>">Database</a>
            </li>
            
        </ul>
    </div>
    
</nav>








<?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/layouts/header.blade.php ENDPATH**/ ?>