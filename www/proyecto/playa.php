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

<<<<<<< HEAD
.navbar {
    margin-bottom: 20px;
}

.container {
    padding: 20px;
    background-color: ;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
=======
.navbar{
  padding-left: 80px;
  padding-right: 80px;  
  margin-bottom: 50px;
}

.content {
  margin-top: 70px;
  margin-left: 50px;
  width: 550px;
>>>>>>> Dario
}

.beach-name {
    color: #333333;
<<<<<<< HEAD
    text-align: center;
    font-size: 2.5em;
    margin-bottom: 10px;
=======
    text-align: left;
    font-size: 2.5em;
    margin-bottom: 30px;
>>>>>>> Dario
}

.address {
    color: #555555;
<<<<<<< HEAD
    text-align: center;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.description {
    text-align: justify;
=======
    text-align: left;
    font-size: 1.2em;
    margin-bottom: 50px; 
}

.description {
    text-align: left;
>>>>>>> Dario
    font-size: 1.1em;
    line-height: 1.6em;
    color: #444444;
    margin-bottom: 20px;
    max-width: 400px;  
}

.image-container {
    display: flex;
    justify-content: center; /* Para centrar el contenido horizontalmente */
    align-items: center; /* Para centrar el contenido verticalmente */
    margin-right: 20px;
}

.image-container img {
    max-width: 100%; 
    max-height: 100%;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 80px;
}

.image-container img {
    width: 600px; 
    height: 600px; 
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 80px;
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

<<<<<<< HEAD
.container {
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
<<<<<<< HEAD
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
=======
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;  
    justify-content: space-between;
}

.pie {
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;  
    justify-content: space-between;
}

.content {
  margin-top: 70px;
  margin-left: 50px;
>>>>>>> Dario
}

/* Estilos para el formulario */
.comment-form {
    background-color: #f0f8ff;
    padding: 30px;
    border: solid 1px black;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    height: 350px;
    margin: 0 auto;
    margin-top: 50px;
    margin-bottom: 50px;
    font-family: 'Arial', sans-serif;
}

.comment-form h2 {
    font-size: 1.8em;
    margin-bottom: 20px;
    color: #333;
    font-weight: 600;
    text-align: center;
}

.comment-form p {
    font-size: 1em;
    margin-bottom: 10px;
    color: #555;
    text-align: center;
}

.comment-form label {
    display: block;
    margin-bottom: 5px;
    font-size: 1em;
    color: #333;
    font-weight: 600;
}

.comment-form textarea {
    width: 100%;
    padding: 15px;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 20px;
    resize: vertical;
    box-sizing: border-box;
    height: 100px;
}

.comment-form button {
    background-color: #007BFF;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
    display: block;
    width: 100%;
    box-sizing: border-box;
}

.comment-form button:hover {
    background-color: #0056b3;
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
        .comment-card {
            width: 100%;
            max-width: 900px;
            margin: 20px 250px;
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
=======
.cards {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.navbar-dark .navbar-nav .nav-link:hover {
    color:lightblue !important;
    
}
>>>>>>> f2353f9f34109becd48895c073cebfe3ec95f498

</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<<<<<<< HEAD
        <div class="container">
=======
        
>>>>>>> Dario
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
<<<<<<< HEAD
          </div>
=======
          
>>>>>>> Dario
        </div>
      </nav>  
      
      <div class="container">
    <div class="content">
        <h1 class="beach-name"><?php echo $playa[0]->getNombre(); ?></h1>
        <p class="address"><?php echo $playa[0]->getCiudad(); ?></p>
        <div class="description">
            <p>
                <?php echo $playa[0]->getDescripcion(); ?>
            </p>
        </div>
<<<<<<< HEAD

        <div class="comment-form" style="margin-top: 50px; margin-bottom: 50px;">
            <h2>Deja tu reseña aqui</h2>
            <form action="" method="post">
                <p>Usuario: <?php echo $info["nombre"];?></p>
                <label for="comment">Comentario:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>

                <button type="submit">Enviar</button>
            </form>
=======
        <div class="image-container">
            <img class="cards" src="img/<?php echo $imagen;?>"alt="Imagen de <?php echo $playa[0]->getNombre(); ?>">
>>>>>>> f2353f9f34109becd48895c073cebfe3ec95f498
        </div>
    </div>
    <div class="image-container">
        <img class="cards" src="img/<?php echo $imagen;?>" alt="Imagen de <?php echo $playa[0]->getNombre(); ?>">
    </div>
</div>


    <h1 style="margin: 50px 180px;">Seccion de comentarios</h1>

    <?php 
    $coments = $data->getComents($nombre);
    echo $data->showComents($coments, $usuario); 
    ?>
    
</body>


<footer class="bg-dark text-white pt-5 pb-4">
<<<<<<< HEAD
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
=======
  <div class="pie text-center text-md-left">
    <div class="row text-center text-md-left">
>>>>>>> Dario

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