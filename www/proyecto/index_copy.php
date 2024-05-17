<?php

require_once "autoloader.php";
$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
  .d-item {
    height: 650px;
}

.d-img {
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6);
}


.mapa {
    border-radius: 15px;
    width: 600px;
    height: 400px;
}

.imagen {
    width: 600px;
    height: 300px;
    margin-bottom: 20px;
}

.card-footer {
    text-align: center;
}
</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="Avatar Logo" style="width:60px;" class="rounded-pill"> 
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Destino</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contacto</a>
              </li>
            </ul>
            
            <form class="d-flex">
              <a href="login.php"><button class="btn btn-primary" type="button"style="margin-right:10px" >Log In</button></a>
              <a href="register.php"><button class="btn btn-primary" type="button">Register</button></a>
            </form>
          </div>
        </div>
      </nav>


      <div id="carouselExample" class="carousel slide"data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active d-item">
            <img src="img/img1.jpg" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4" >
                <h2 class="display-1 fw-folder text-capitalize" >Encuentra tu playa de ensueño</h2>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5" >Informacion</button>
            </div>
          </div>

          <div class="carousel-item d-item">
            <img src="img/img3.jpg" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4" >
                <h2 class="display-1 fw-folder text-capitalize" >Encuentra tu playa de ensueño</h2>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5" >Informacion</button>
            </div>
          </div>
          <div class="carousel-item d-item">
            <img src="img/img4.jpg" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4" >
                <h2 class="display-1 fw-folder text-capitalize" >Encuentra tu playa de ensueño</h2>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5" >Informacion</button>
            </div>
          </div>
        </div>
       
      </div>
</div>
</div>


<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Nombre de la compañia</h5>
        <p>Playa finder</p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Proovedores</h5>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Tony pizzeria</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Alcasser</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Carcaixent</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Sabadell</a></p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links de interes</h5>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Cuenta</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Hazte miembro</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Envios</a></p>
          <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Informacion productos</a></p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
          <p>
            <i class="bi bi-house"></i> Alcasser, El Pla, 34
          </p>
          <p>
            <i class="bi bi-envelope"></i> aodariolopez@gmail.com
          </p>
          <p>
            <i class="bi bi-telephone-fill"></i> +34 722 65 31 27
          </p>
          <p>
            <i class="bi bi-printer"></i> +01 315115548
          </p>
      </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-6 col-lg-7">
        <p>Copyright ©2024 Derechos de autor de:
          <a href="https://tonipizzeria.com/index.php/181-alcacer-new" style="text-decoration: none;">
            <strong class="text-warning">GRUPO-3</strong>
          </a>
        </p>
      </div>
    
      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-google"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


</footer>
      
</body>
</html>