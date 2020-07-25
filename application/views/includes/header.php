<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>About Oxmo Tex BD</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">

  <!-- fancybox gallery -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/jquery.fancybox.min.css">

  <!-- Your custom styles -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
</head>
<body>

  <!-- ======== Navbar Area ======== -->
  <nav class="navbar navbar-expand-lg navbar-light py-2">
    
    <a class="navbar-brand" href="#"><!-- Oxmo Tex BD -->
      <img src="<?= base_url();?>assets/img/LOGO.png" alt="" class="img-fluid" style="max-width: 200px; height: 50px">
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url();?>">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('About');?>">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Product');?>">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Contact');?>">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Login');?>">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Signup');?>">Signup</a>
        </li>
      </ul>
    </div>
  </nav>



  <!-- ======== Banner Area ======== -->
  <section class="banner_area">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url();?>assets/img/slider1.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="">
              <h5 class="text-white display-3">Oxmo Tex BD</h5>
              <!-- <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit perspiciatis natus cum delectus, porro voluptatibus dolore quas fugit vel doloribus.</p> -->
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url();?>assets/img/slider2.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <div>
              <h5 class="text-white display-3">Oxmo Tex BD</h5>
              <!-- <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit perspiciatis natus cum delectus, porro voluptatibus dolore quas fugit vel doloribus.</p> -->
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url();?>assets/img/slider3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <div>
              <h5 class="text-white display-3">Oxmo Tex BD</h5>
              <!-- <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit perspiciatis natus cum delectus, porro voluptatibus dolore quas fugit vel doloribus.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


