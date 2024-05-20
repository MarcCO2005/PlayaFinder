<?php

require_once "autoloader.php";

$data = new Mostrar;

$result = $data->getAllPlayas();
$output = $data->showCards($result);
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
</head>
<style>
  body {
    background-color: #00E2E2;
    background-size: cover;
    position: relative;
    background-repeat:no-repeat;
    width: 100%;
} 
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
.mapa{
  border-radius: 15px;
  width:100% ;
  height:490px ;
}


.imagen {
    width: 600px;
    height: 300px;
    margin-bottom: 20px;
}

.card-footer {
    text-align: center;
}
.navbar {
            background-color: ; 
            position: absolute;
            width: 100%;
            z-index: 999;
        }
        .carousel-item {
            height: 100%; 
        }
        .navbar-dark .navbar-nav .nav-link:hover {
 
    background-color:  rgba(255, 255, 255, 0.5);
    border-radius: 50px;
}

.carousel-wrapper {
        margin-top: 80px;
    }

    .carousel-item-custom {
        text-align: center;
        border: 1px solid black;
        border-radius: 15px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 1);
        height: 400px;
    }

    .carousel-item-custom h3 {
        margin-top: 15px;
        font-size: 1.5rem;
        color: #0000000;
    }
    .carousel-item-custom img {

        height: 175px;

    }

    .carousel-item-custom p {
        font-size: 1rem;
        color: #010617;
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
    .carousel-wrapper .carousel-item-custom a {
    display: inline-block;
    padding: 10px 20px;
    color: #007BFF; /* Color del enlace */
    text-decoration: none;
    border: 2px solid #007BFF; /* Borde del enlace */
    transition: all 0.3s ease; /* Transición suave para los cambios */
}

.carousel-wrapper .carousel-item-custom a:hover {
    background-color: #007BFF; /* Color de fondo al hacer hover */
    color: #fff; /* Color del texto al hacer hover */
    text-decoration: none; /* Asegura que no haya subrayado */
}
</style>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark transparent">
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
                <a class="nav-link" href="#"style="color:white;">Destino</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php"style="color:white;">Contacto</a>
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

    <div class="container">
      <br>
      <br>
      <br>
      <br>
<h1 class="Playas-frecuentes" >Destinos frecuentes</h1>
        
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
      <br>
      <h1 style="text-align:center;">PLAYAS</h1>
      <div class="mb-3">
    <label for="provincia" class="form-label">Filtra por provincia</label>
    <select name="provincia" class="form-select" id="provincia" required>
        <option value="" selected disabled>Selecciona tu provincia</option>
        <option value="Álava">Álava</option>
        <option value="Albacete">Albacete</option>
        <option value="Alicante">Alicante</option>
        <option value="Almería">Almería</option>
        <option value="Asturias">Asturias</option>
        <option value="Ávila">Ávila</option>
        <option value="Badajoz">Badajoz</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Burgos">Burgos</option>
        <option value="Cáceres">Cáceres</option>
        <option value="Cádiz">Cádiz</option>
        <option value="Cantabria">Cantabria</option>
        <option value="Castellón">Castellón</option>
        <option value="Ceuta">Ceuta</option>
        <option value="Ciudad Real">Ciudad Real</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Cuenca">Cuenca</option>
        <option value="Gerona">Gerona</option>
        <option value="Granada">Granada</option>
        <option value="Guadalajara">Guadalajara</option>
        <option value="Guipúzcoa">Guipúzcoa</option>
        <option value="Huelva">Huelva</option>
        <option value="Huesca">Huesca</option>
        <option value="Islas Baleares">Islas Baleares</option>
        <option value="Jaén">Jaén</option>
        <option value="La Coruña">La Coruña</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Las Palmas">Las Palmas</option>
        <option value="León">León</option>
        <option value="Lérida">Lérida</option>
        <option value="Lugo">Lugo</option>
        <option value="Madrid">Madrid</option>
        <option value="Málaga">Málaga</option>
        <option value="Melilla">Melilla</option>
        <option value="Murcia">Murcia</option>
        <option value="Navarra">Navarra</option>
        <option value="Orense">Orense</option>
        <option value="Palencia">Palencia</option>
        <option value="Pontevedra">Pontevedra</option>
        <option value="Salamanca">Salamanca</option>
        <option value="Segovia">Segovia</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Soria">Soria</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
        <option value="Teruel">Teruel</option>
        <option value="Toledo">Toledo</option>
        <option value="Valencia">Valencia</option>
        <option value="Valladolid">Valladolid</option>
        <option value="Vizcaya">Vizcaya</option>
        <option value="Zamora">Zamora</option>
        <option value="Zaragoza">Zaragoza</option>
    </select>
</div>
        <?php echo $output; ?>

        
    </div>
</body>


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
                        items: 3,
                    }
                },
            });
        });
      
    </script>
</html>