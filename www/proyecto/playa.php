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
  /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h1.beach-name {
    font-size: 2.5em;
    margin-bottom: 20px;
    color: #005f6b;
}

.address {
    font-size: 1.2em;
    margin-bottom: 20px;
    color: #00796b;
}

.description p {
    font-size: 1.1em;
    margin-bottom: 20px;
}

.image-container {
    text-align: center;
}

.image-container img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Media Queries */
@media (max-width: 768px) {
    .container {
        margin: 20px;
        padding: 10px;
    }

    h1.beach-name {
        font-size: 2em;
    }

    .address, .description p {
        font-size: 1em;
    }
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
    
</body>



</html>