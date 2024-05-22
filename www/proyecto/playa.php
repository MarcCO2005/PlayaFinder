<?php

require_once "autoloader.php";
session_start();
$data = new Mostrar;
$nombre = $_GET['nombre'];
$imagen = $_GET['imagen'];
$result = $data->getAllPlayas();
$playa = $data->getPlaya($nombre, $result);

$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
$fecha = date('Y-m-d');
$usuario = $info["nombre"];

$data->comentar($usuario, $fecha, $nombre, $imagen);

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
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f8ff;
    margin: 0;
    padding: 0;
}

.content {
  margin-top: 50px;
  margin-bottom: 50px;
}

.navbar {
    margin-bottom: 20px;
}

.container {
    padding: 20px;
    background-color: ;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.beach-name {
    color: #333333;
    text-align: center;
    font-size: 2.5em;
    margin-bottom: 10px;
}

.address {
    color: #555555;
    text-align: center;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.description {
    text-align: justify;
    font-size: 1.1em;
    line-height: 1.6em;
    color: #444444;
    margin-bottom: 20px;
}

.image-container {
    text-align: center;
}

.image-container img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.nav-link {
    color: white !important;
    font-size: 1.1em;
}

.nav-link:hover {
    color: #ffd700 !important;
}

.bi-person-circle {
    color: white;
    font-size: 2em;
}

.comment-form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .comment-form h2 {
            margin-bottom: 10px;
        }
        .comment-form label {
            display: block;
            margin-bottom: 5px;
        }
        .comment-form input, .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .comment-form button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .comment-form button:hover {
            background-color: #218838;
        }
        .comment-card {
            width: 100%;
            max-width: 400px;
            margin: 20px 100px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .comment-card h3 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #333;
        }
        .comment-card p {
            margin: 5px 0;
            color: #666;
        }
        .comment-card .date {
            font-size: 0.9em;
            color: #999;
        }
        .comment-card .comment-text {
            margin-top: 10px;
            font-size: 1em;
            color: #444;
        }
        .delete-button {
            top: 20px;
            right: 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.9em;
            margin-top: 20px;
        }
        .delete-button:hover {
            background-color: #c0392b;
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
        <h1 class="beach-name"><?php echo $playa[0]->getNombre(); ?></h1>
        <p class="address"><?php echo $playa[0]->getCiudad(); ?></p>
        <div class="description">
            <p>
            <?php echo $playa[0]->getDescripcion();?>
          </p>
        </div>
        <div class="image-container">
            <img src="img/<?php echo $imagen;?>" alt="Imagen de <?php echo $playa[0]->getNombre(); ?>">
        </div>
    </div>

    <h1>Comentarios</h1>

    <?php 
    $coments = $data->getComents($nombre);
    echo $data->showComents($coments, $usuario); 
    ?>

    <div class="comment-form" style="margin-top: 50px; margin-bottom: 50px;">
    <h2>Deja tu comentario</h2>
    <form action="" method="post">
        <p>Usuario: <?php echo $info["nombre"];?></p>
        <p><?php echo $fecha;?></p>

        <label for="comment">Comentario:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</div>
    
</body>


<footer class="bg-dark text-white pt-5 pb-4">
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
          <p>
            <i class="bi bi-house"></i> Valencia, El Pla, 34
          </p>
          <p>
            <i class="bi bi-envelope"></i> playafinder@gmail.com
          </p>
          <p>
            <i class="bi bi-telephone-fill"></i> +34 653 48 71 23
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
          <a href="" style="text-decoration: none;">
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

</html>