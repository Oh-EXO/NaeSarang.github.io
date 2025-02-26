<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?php echo $__env->yieldContent('title'); ?>INDEX</title>



    <!---CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--PERSONAL CSS-->
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">

</head>

<body>
    <img src="<?php echo e(asset('img/head.jpg')); ?>"  class=" img-fluid position-relative" width="100%" height="50%"  >
    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: rgb(255, 255, 255)">
                <nav>
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100" style="color :black">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                            <img src="<?php echo e(asset('img/uiop.png')); ?>" alt="Logo" width="50" height="50"  class="d-inline-block" >
                            <H5 class="ms-1 d-none d-sm-inline">GAD CORNER</H5>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="/" class="nav-link align-middle px-0">
                                    <i class="bi bi-houses fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">Home</h5>
                                </a>
                            </li>
                            
                            <li class="<?php echo e(request()->is('GAD_RI') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('GAD_RI.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-file-pdf fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">GAD Issuances</h5></a>
                            </li>
                            <li class="<?php echo e(request()->is('GAD_Acts') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('GAD_Acts.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-collection fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">Activities</h5></a>
                            </li>
                            <li class="<?php echo e(request()->is('GPB') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('GPB.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-file-earmark-text fnt"></i> <h5 class="ms-1 d-none d-sm-inline fnt">GPB & GADAR</h5></a>
                            </li>
                            <li class="<?php echo e(request()->is('db') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('db.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-bar-chart-line fnt"></i> <h5 class="ms-1 d-none d-sm-inline fnt">Database</h5></a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            
            
            <div class="col py-3">
                <div class="card" style="text-align: center;box-shadow: 0 2px 10px 0 rgb(0, 0, 0);">

                    <div class="card-body">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <!---JS---->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <!--PERSONAL JS-->
    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\istra\Downloads\GAD\resources\views/main_view.blade.php ENDPATH**/ ?>