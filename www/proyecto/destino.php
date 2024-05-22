<?php

require_once "autoloader.php";

$security = new Security();
$mostrar = new mostrar();

$email = $security->getUserData();
$info = $security->getUser($email);
$estrellas = $mostrar->fivestar();  

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
    background-color: #F1F5F7;
    background-size: cover;
    position: relative;
    background-repeat: no-repeat;
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
.mapa {
    border-radius: 15px;
    width: 100%;
    height: 490px;
}

.imagen {
    width: 600px;
    height: 300px;
    margin-bottom: 20px;
}

input[type="submit"] {
    background-color: #007BFF; 
    color: white; 
    border: none; 
    padding: 10px 20px; 
    font-size: 16px;ç
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
.carousel-item {
    height: 100%;
}
.navbar-dark .navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.5);
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

.full-width-footer {
    width: 100%;
    margin: 0;
    padding: 0;
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
      <br><br><br><br><br>
      
<h1 class="Playas-frecuentes">Destinos populares</h1>
        
 
<div class="carousel-wrapper">
        <div class="owl-carousel owl-theme">
            <?php if (!empty($estrellas)): ?>
                <?php foreach ($estrellas as $estrella): ?>
                    <div class="item carousel-item-custom">
                        <?php if (!is_null($estrella['imagen'])): ?>
                            <img src="<?php echo htmlspecialchars($estrella['imagen']); ?>" alt="<?php echo isset($estrella['nombre']) ? htmlspecialchars($estrella['nombre']) : ''; ?>" class="carousel-img">
                        <?php endif; ?>x
                        <?php if (!is_null($estrella['nombre'])): ?>
                            <h3><?php echo htmlspecialchars($estrella['nombre']); ?></h3>
                        <?php endif; ?>
                        <?php if (!is_null($estrella['valoracion'])): ?>
                            <p><?php echo htmlspecialchars($estrella['valoracion']); ?></p>
                        <?php endif; ?>
                        <a href="#">READ MORE</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay playas con 5 estrellas disponibles.</p>
            <?php endif; ?>
        </div>
    </div>
      <br>
      <h1 style="text-align:center;">PLAYAS</h1>
      <div class="mb-3">
        <form action="" method="POST">
        <label for="provincia" class="form-label">Filtra por provincia</label>
        <select name="provincia" class="form-select" style="width: 300px;" id="provincia" required>
            <option value="" selected disabled>Selecciona tu provincia</option>
            <option value="0">Quitar filtros</option>
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
    <input type="submit" value="Filter" style="margin-top: 5px;">
</form>
<form action="" method="POST">
        <label for="provincia" class="form-label">Filtra por estrella</label>
        <select name="provincia" class="form-select" style="width: 300px;" id="provincia" required>
            <option value="" selected disabled>Selecciona tu provincia</option>
            <option value="0">Quitar filtros</option>
            <option value="1estrella">★</option>
            <option value="Albacete">★★</option>
            <option value="Alicante">★★★</option>
            <option value="Almería">★★★★</option>
            <option value="Almería">★★★★★</option>
            </select>
    <input type="submit" value="Filter" style="margin-top: 5px;">
</form>
            </form>
</div>
        <?php

            $data = new Mostrar;

            $result = $data->getAllPlayas();
            

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $filtro = $_POST['provincia'];
            } else {
                $filtro = 0;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $filtroValoracion = $_POST['valoracion'];
            } else {
                $filtroValoracion = 0;
            }


            $output = $data->showCards($result,$filtro,$filtroValoracion);
            echo $output;
            
           ?>   
        


        
    </div>
    
    <footer class="bg-dark text-white pt-5 pb-4 full-width-footer" style="margin-top: 50px;">
        <div class="container-fluid text-center text-md-left">
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
      
    </script>
    
</html>