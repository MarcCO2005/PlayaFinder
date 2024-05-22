<?php
require_once "autoloader.php";
$security = new Security();
$registerMessage = $security->doRegister();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayaFinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <style>
      
        body {
            background-color: #333;
            color: white;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('img/fondo.png');
            background-size: cover;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .content {
            position: relative;
            z-index: 2;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 40px 0;
        }
        .contact-info, .contact-form {
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 20px -5px rgba(0,0,0,0.5);
        }
        .contact-info {
            background: #444;
            flex: 1;
            margin-right: 20px;
        }
        .contact-form {
            background: black;
            flex: 2;
            margin-left: 20px;
        }
        .contact-info h2, .contact-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .contact-info p, .contact-form label {
            margin-bottom: 10px;
            font-size: 18px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #555;
            border-radius: 4px;
            background: #333;
            color: white;
        }
        .contact-form button {
            background: #ffc107;
            color: #333;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 4px;
        }
        .contact-form button:hover {
            background: #e0a800;
        }
        footer {
            background: #222;
            color: #999;
            padding: 20px 0;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
          color:lightblue !important;
    
        }
    </style>
</head>
<body><div id="carouselExample" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md-4">
          <img src="img/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <img src="image4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image6.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-md-4">
          <img src="image7.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image8.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="col-md-4">
          <img src="image9.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>
.carousel-item {
  display: flex;
}
.carousel-item img {
 
