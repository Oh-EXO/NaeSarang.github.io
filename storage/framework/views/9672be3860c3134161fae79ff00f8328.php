<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?php echo $__env->yieldContent('title'); ?></title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">

</head>

<body>
    <img src="<?php echo e(asset('img/Banner_Head.png')); ?>"  class=" img-fluid position-relative" width="100%" height="50%"  >
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: rgb(255, 214, 214)">
                <nav>
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100" style="color :black">

                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item <?php echo e(request()->is('/') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="/" class="nav-link align-middle px-0">
                                    <i class="bi bi-arrow-through-heart-fill fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">Love</h5>
                                </a>
                            </li>

                            <li class="<?php echo e(request()->is('Sup') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('Sup.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-envelope-paper-heart-fill fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">Suprise</h5></a>
                            </li>
                            <li class="<?php echo e(request()->is('Message') ? 'active' : ''); ?>" style="width: 100%">
                                <a href="<?php echo e(route('Message.index')); ?>" class="nav-link px-0 align-middle">
                                    <i class="bi bi-chat-heart-fill fnt"  ></i> <h5 class="ms-1 d-none d-sm-inline fnt">Message</h5></a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col py-3">
                <div class="card" style="text-align: center;box-shadow: 0 2px 10px 0 rgb(0, 0, 0);">

                    <div class="card-body" style="background-color:  rgba(122, 0, 0, 0.638)">
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

    <script type="text/javascript" src="<?php echo e(URL::asset('js/script.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\istra\Downloads\GAD\GAD\resources\views/main_view.blade.php ENDPATH**/ ?>