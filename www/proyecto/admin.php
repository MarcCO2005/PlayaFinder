<?php

require_once "autoloader.php";
session_start();

$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
$user = $info['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
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
    background-color: #F1F5F7;
    background-size: cover;
    position: relative;
    background-repeat: no-repeat;
    width: 100%;
}

.btn-custom {
    display: inline-block;
    padding: 10px 20px;
    font-size: 10px;
    font-weight: bold;
    color: white;
    background-color: red;
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.btn-custom:hover {
    background-color: red;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.btn-custom:active {
    background-color: #004085;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.btn-custom:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(38, 143, 255, 0.5);
}


.card {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.card h2 {
    margin-top: 0;
}

form {
    display: flex;
    flex-direction: column;
    
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}


.button-playa {
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.button-playa:hover {
    background-color: #45a049;
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
.mapa {
    border-radius: 15px;
    width: 100%;
    height: 490px;
}

input[type="submit"] {
    background-color: #007BFF; 
    color: white; 
    border: none; 
    padding: 10px 20px; 
    font-size: 16px;
    font-weight: bold; 
    border-radius: 5px;
    cursor: pointer; 
    transition: background-color 0.3s ease, transform 0.3s ease; 
}

input[type="submit"]:hover {
    background-color: #0056b3; 
    transform: scale(1.05); 
}

input[type="submit"]:active {
    background-color: #003f7f; 
    transform: scale(1);
}

input[type="submit"]:focus {
    outline: none; 
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
}


.card-footer {
    text-align: center;
}
.navbar {
    background-color: #302B37;
    position: absolute;
    width: 100%;
    z-index: 999;
}
.carousel-item-custom {
    transition: transform 0.3s ease;

}
.carousel-item-custom:hover {
            transform: scale(1.05);
        }
        .nav-link:hover {
    color: #ffd700 !important;
}

.carousel-wrapper {
    margin-top: 90px;
}

.carousel-item-custom {
    text-align: center;
    border: 1px solid black;
    border-radius: 15px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 1);
    height: 500px;

}

.carousel-item-custom h3 {
    margin-top: 15px;
    font-size: 1.5rem;
    color: #000000;
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

.full-width-footer {
    width: 100%;
    margin: 0;
    padding: 0;
}

    .card-hover {
        transition: transform 0.3s ease;
    }
    .card-hover:hover {
        transform: scale(1.05);
        
    }
    .card-img {
    height: auto;

    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    
}
.card-img-top {
    height: 200px;
    width: 360px;
    border: none;
    object-fit: cover;
}


.carousel-wrapper .carousel-item-custom a:hover {
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    
}
.carousel-item-custom input[type="submit"]:hover,
.carousel-item-custom a:hover {
            transform: scale(1.05);
            }
            .btn-primary:hover {
            
            transform: scale(1.05); /* Agrandar el botón al 5% más grande */
        }
        .btn-danger{
            margin-right:5px;
            margin-left:5px
        }
.carousel-item-custom{
    transition: transform 0.3s ease;
}

.carousel-item-custom:hover{
    transform: scale(1.03);
    
}
.Playas-frecuentes {
    justify-content: center;
    text-align: center;
    
}
.carousel-wrapper .carousel-item-custom a {
    display: inline-block;
    padding: 10px 20px;
    color: #007BFF;
    text-decoration: none;
    border: 2px solid #007BFF;
    transition: all 0.3s ease;
    
}

.carousel-wrapper .carousel-item-custom a:hover {
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    
}
.carousel-item-custom input[type="submit"]:hover,
        .carousel-item-custom a:hover {
            transform: scale(1.05);
            }
            .btn-primary:hover {
            transform: scale(1.05); /* Agrandar el botón al 5% más grande */
        }
        .card-hover {
        transition: transform 0.3s ease;
    }

    .card-hover:hover {
        transform: scale(1.05);
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
                <a class="nav-link" href="destino.php"style="color:white;">Destino</a>
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
      <br><br><br><br><br>
      
      <div class="card">
        <h2>Añadir Playa</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombrePlaya">Nombre de la Playa:</label>
            <input type="text" id="nombrePlaya" name="nombrePlaya" required>

            <label for="valoracion">Valoración (1 a 5):</label>
            <input type="number" id="valoracion" name="valoracion" min="1" max="5" required>

            <label for="provincia">Provincia:</label>
            <select name="provincia" class="form-select" style="width: 300px;" id="provincia" required>
                <option value="" selected disabled>Selecciona tu provincia</option>
                <option value="Alicante">Alicante</option>
                <option value="Almería">Almería</option>
                <option value="Asturias">Asturias</option>
                <option value="Barcelona">Barcelona</option>
                <option value="Cádiz">Cádiz</option>
                <option value="Cantabria">Cantabria</option>
                <option value="Castellón">Castellón</option>
                <option value="Ceuta">Ceuta</option>
                <option value="Gerona">Gerona</option>
                <option value="Granada">Granada</option>
                <option value="Guipúzcoa">Guipúzcoa</option>
                <option value="Huelva">Huelva</option>
                <option value="Islas Baleares">Islas Baleares</option>
                <option value="La Coruña">La Coruña</option>
                <option value="Las Palmas">Las Palmas</option>
                <option value="Lugo">Lugo</option>
                <option value="Málaga">Málaga</option>
                <option value="Melilla">Melilla</option>
                <option value="Murcia">Murcia</option>
                <option value="Pontevedra">Pontevedra</option>
                <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                <option value="Tarragona">Tarragona</option>
                <option value="Valencia">Valencia</option>
                <option value="Vizcaya">Vizcaya</option>
    </select>

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

            <label for="imagen">Subir Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*" required>
<br>
            <button class="button-playa" type="submit">Enviar</button>
        </form>
    </div>       

      <br>
      <h1 style="text-align:center;">PLAYAS</h1>
      <div class="mb-3">
        <form action="" method="GET">
        <label for="filtro" class="form-label">Filtra por provincia</label>
        <select name="filtro" class="form-select" style="width: 300px;" id="filtro" required>
                <option value="" selected disabled>Selecciona tu provincia</option>
                <option value="0">Quitar filtros</option>
                <option value="Alicante">Alicante</option>
                <option value="Almería">Almería</option>
                <option value="Asturias">Asturias</option>
                <option value="Barcelona">Barcelona</option>
                <option value="Cádiz">Cádiz</option>
                <option value="Cantabria">Cantabria</option>
                <option value="Castellón">Castellón</option>
                <option value="Ceuta">Ceuta</option>
                <option value="Gerona">Gerona</option>
                <option value="Granada">Granada</option>
                <option value="Guipúzcoa">Guipúzcoa</option>
                <option value="Huelva">Huelva</option>
                <option value="Islas Baleares">Islas Baleares</option>
                <option value="La Coruña">La Coruña</option>
                <option value="Las Palmas">Las Palmas</option>
                <option value="Lugo">Lugo</option>
                <option value="Málaga">Málaga</option>
                <option value="Melilla">Melilla</option>
                <option value="Murcia">Murcia</option>
                <option value="Pontevedra">Pontevedra</option>
                <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                <option value="Tarragona">Tarragona</option>
                <option value="Valencia">Valencia</option>
                <option value="Vizcaya">Vizcaya</option>
    </select>
    <input type="submit" value="Filter" style="width: 100px; margin-top: 5px;">
</form>
</div>
        <?php

            $data = new Mostrar;

            $result = $data->getAllPlayas();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombrePlaya'];
            $valoracion = $_POST['valoracion'];
            $ciudad = $_POST['provincia'];
            $descripcion = $_POST['descripcion'];
            

            $data->nuevaPlaya($nombre, $ciudad, $valoracion, $descripcion, $_FILES);
                
            }
            $result = $data->getAllPlayas();
            $filtro = 0;

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $filtro = $_GET['filtro'];
            } else {
                $filtro = 0;
            }

            $output = $data->showCards($result, $filtro, $user);
            echo $output;
        ?>

</div> 
    </div>
    
    <footer class="bg-dark text-white pt-5 pb-4 full-width-footer" style="margin-top: 50px;">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Nombre de la compañia</h5>
                    <p>Playa finder</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Proovedores</h5>
                    <p><a href="https://www.ign.es/web/ide-area-nodo-ide-ign" class="text-white" style="text-decoration: none;">IGN</a></p>
                    <p><a href="https://www.meteomatics.com/en/weather-api/?ppc_keyword=weather%20api&utm_term=weather%20api&utm_campaign=Weather+API+(Spanien)&utm_source=adwords&utm_medium=ppc&hsa_acc=5001518620&hsa_cam=16963285670&hsa_grp=145005653988&hsa_ad=596908640811&hsa_src=g&hsa_tgt=kwd-40383213246&hsa_kw=weather%20api&hsa_mt=e&hsa_net=adwords&hsa_ver=3&gad_source=1&gclid=Cj0KCQjw6auyBhDzARIsALIo6v8s1wVBJlKarCYIGybONke0MgRlu5yZSntDN5tWE_1ibex0KN0PsL0aAvRrEALw_wcB" class="text-white" style="text-decoration: none;">WeatherAPI</a></p>
                    <p><a href="https://www.pexels.com/es-es/" class="text-white" style="text-decoration: none;">Pexels</a></p>
                    <p><a href="https://www.tripadvisor.es/" class="text-white" style="text-decoration: none;">TripAdvisor</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links de interes</h5>
                    <p><a href="" class="text-white" style="text-decoration: none;">Cuenta</a></p>
                    <p><a href="" class="text-white" style="text-decoration: none;">Hazte miembro</a></p>
                    <p><a href="" class="text-white" style="text-decoration: none;">Envios</a></p>
                    <p><a href="" class="text-white" style="text-decoration: none;">Informacion productos</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
                    <p><i class="bi bi-house"></i> Valencia, El Pla, 34</p>
                    <p><i class="bi bi-envelope"></i> playafinder@gmail.com</p>
                    <p><i class="bi bi-telephone-fill"></i> +34 653 48 71 23</p>
                    <p><i class="bi bi-printer"></i> +01 315115548</p>
                </div>
            </div>

            <hr class="mb-4">

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <p>Copyright ©2024 Derechos de autor de:
                        <a href="hw" style="text-decoration: none;">
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
        function mostrarDesplegable(btn) {
            var desplegable = btn.nextElementSibling;
            if (desplegable.style.display === "none") {
                desplegable.style.display = "block";
                btn.querySelector('i').classList.replace('bi-chevron-down', 'bi-chevron-up');
            } else {
                desplegable.style.display = "none";
                btn.querySelector('i').classList.replace('bi-chevron-up', 'bi-chevron-down');
            }
        }
    </script>
    
</html>