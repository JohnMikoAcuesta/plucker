<!DOCTYPE html>
<html lang="en">
<head>
    <!-- START BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- END BOOTSTRAP -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- GOOGLE ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round"rel="stylesheet">
    <!-- MAIN CSS -->
    <link href="<?php echo base_url('public/styles/main.css');?>"rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plucker</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/images/graphic_eq.svg');?>">
    <!-- TOPNAV -->
    <nav class="navbar navbar-expand-lg px-4 py-3">
        <div class="container-fluid">
            <span class="material-icons-round text-success">graphic_eq</span>
            <div class="row">
                <a class="navbar-brand fw-bold" href="<?php echo base_url();?>">Plucker</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-5 justify-content-center ">
                    <li class="nav-item">
                        <a class="nav-link active text-dark fw-semibold" href="#">Guitars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Gear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">About Us</a>
                    </li>
                </ul>
            </div>
                <a class="btn position-relative"><span class="material-icons-round align-middle">search</span></a>
                <a href="<?php echo base_url('cart/index');?>"class="btn position-relative"><span class="material-icons-round align-middle">shopping_bag</span><span class="position-absolute top-30 start-80 translate-middle badge rounded-pill bg-danger">3</span></a>
                <a href="" class="ms-3"><img src="<?php echo base_url('public/images/User.jpg');?>" class="rounded-circle" alt="User" style="width: 40px; height: 40px; overflow: hidden;"></a>
        </div>
    </nav>
