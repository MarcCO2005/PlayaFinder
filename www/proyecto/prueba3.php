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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">
    <title>Image Carousel</title>
</head>
<style>
    .content {
        margin-bottom: 50px;
    }
    
    .d-item {
        height: 600px;
    }
    
    .subtitulo {
        font-size: 30px;
    }
    
    .d-img {
        width: 100%;
        height: 670px;
        object-fit: cover;
        filter: brightness(0.6);
    }

    .mapa {
        border-radius: 15px;
        width: 100%;
        height: 490px;
    }

    .imagen {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .card-footer {
        text-align: center;
    }
  
    .navbar {
        position: relative;
        width: 100%;
        z-index: 999;
    }

    .carousel-item {
        height: 100%;
        width: 70%;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
    color:lightblue !important;
    
    }

    .carousel-wrapper {
        margin-top: 80px; /* Add some space below the navbar */
    }

    .carousel-item-custom {
        text-align: center;
        border: 3px solid black; /* Border for the carousel items */
        border-radius: 15px; /* Rounded corners */
        padding: 20px; /* Padding for spacing */
        background-color: #f0f0f0; /* Background color */
    }

    .carousel-item-custom h3 {
        margin-top: 15px;
        font-size: 1.5rem;
        color: #343a40;
    }
    .carousel-item-custom img {
        width: 100%;
    }

    .carousel-item-custom p {
        font-size: 1rem;
        color: #6c757d;
    }

    .carousel-item-custom a {
        margin-top: 10px;
        display: inline-block;
        font-size: 1rem;
        color: #007bff;
    }

    .owl-carousel .owl-item {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    .Playas-frecuentes{
        justify-content: center;
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="logined.php">
                <img src="img/logo.jpg" alt="Avatar Logo" style="width:60px;" class="rounded-pill"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logined.php" style="color:white;">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prueba.php" style="color:white;">Destino</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php" style="color:white;">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="nav-link" href="perfil.php" title="<?=$security->getUserData()?>">
                        <i style="color: white; font-size: 2em;" class="d-block w-100 bi bi-person-circle"></i>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    
    
    <nav class="Playas-frecuentes"><h1>Destinos frecuentes</h1></nav>
        
    <div class="carousel-wrapper">
        <div class="owl-carousel owl-theme">
            <div class="item carousel-item-custom">
                <img src="./img/img1.jpg" alt="First Item" class="carousel-img">
                <h3>Item 1</h3>
                <p>Description for the first item goes here.</p>
                <a href="#">READ MORE</a>
            </div>
            <div class="item carousel-item-custom">
                <img src="./img/img2.jpg" alt="Second Item" class="carousel-img">
                <h3>Item 2</h3>
                <p>Description for the second item goes here.</p>
                <a href="#">READ MORE</a>
            </div>
            <div class="item carousel-item-custom">
                <img src="./img/img3.jpg" alt="Third Item" class="carousel-img">
                <h3>Item 3</h3>
                <p>Description for the third item goes here.</p>
                <a href="#">READ MORE</a>
            </div>
            <div class="item carousel-item-custom">
                <img src="./img/img4.jpg" alt="Fourth Item" class="carousel-img">
                <h3>Item 4</h3>
                <p>Description for the fourth item goes here.</p>
                <a href="#">READ MORE</a>
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

    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                dots: false,
                loop: true,
                margin: 50,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 5,
                    }
                },
            });
        });

    </script>
</body>
</html>
