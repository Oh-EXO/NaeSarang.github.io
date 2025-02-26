 <nav class="navbar navbar-expand-sm" style="background-color: rgb(80, 11, 93);margin:0%">
    <a class="navbar-brand" href="/">
        <img src="<?php echo e(asset('img/DILG_Logo.png')); ?>" alt="Logo" width="40" height="40" class="d-inline-block" style="margin-left: 20%">
        
        <a class="navbar-brand">
            GAD CORNER
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
    <div class="collapse navbar-collapse " id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
            <li class="nav-item">
                
                <a class="active" href="/" aria-current="page">
                    <span class="visually-hidden">(current)</span> 
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('GAD_RI.index')); ?>">GAD Related Issuances</a>
            </li>

            <li class="nav-item dropdown ">
                <a href="#">GAD Activities</a>
                <ul class="dropdown-content card ">
                    <a class="card-text btn-sm" style="width: 100%;" href="<?php echo e(route('GAD_Act1.index')); ?>" >
                         2023
                    </a>
                    <a class="card-text  btn-sm" style="width: 100%;" href="<?php echo e(route('GADPh.index')); ?>" >
                        2024
                   </a>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#">GPB & GADAR</a>
            </li>
            <li class="nav-item">
                <a href="#">GAD Database</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('GADPh.index')); ?>">About</a>
            </li>
        </ul>
        
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>
    
</nav>
<img src="<?php echo e(asset('img/bannerHead.jpg')); ?>"  class=" img-fluid position-relative" width="100%"  >
 





<?php /**PATH C:\Users\win10\Documents\LaravelProjects\DILG\GAD\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>