<?php
require_once "autoloader.php";
session_start();
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
            height: 900px;
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
            margin-top: 50px;
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

.navbar {
    background-color: #302B37;
    position: absolute;
    width: 100%;
    z-index: 999;
}
.navbar-dark .navbar-nav .nav-link:hover {
    color:#ffd700 !important;
    
}
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="content">

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
        <div class="contact-section">
            <div class="contact-info">
                <h2>Llámanos</h2>
                <p>604 003 385</p>
                <p>881 954 603</p>
                <p>Horario: 08.30-15.00h</p>
                <p>Oficina: 09.00-13.00h</p>
                <p>* Desde el 20 de junio hasta el 18 de septiembre.</p>
            </div>
            <div class="contact-form">
                <h2>¡Nosotros te llamamos!</h2>
                <form action="send_email.php" method="post">
                  <label for="name">Nombre</label><br>
                  <input type="text" id="name" name="name" required style="  width: 100%;padding: 10px;margin-bottom: 20px;border: 2px solid #555;border-radius: 4px; background: #333;color: white;"><br>
        
                  <label for="email">Email</label><br>
                  <input type="email" id="email" name="email" required style="  width: 100%;padding: 10px;margin-bottom: 20px;border: 2px solid #555;border-radius: 4px; background: #333;color: white;" ><br>
        
                  <label for="message">Mensaje</label><br>
                  <textarea id="message" name="message" rows="4" required style="  width: 100%;padding: 10px;margin-bottom: 20px;border: 2px solid #555;border-radius: 4px; background: #333;color: white;"></textarea><br>
        
            <div class="form-check">
                <label id="boton">
                <input type="checkbox" id="privacyPolicy" name="privacyPolicy" required>
                Aceptar <a href="https://www.aepd.es/politica-de-privacidad-y-aviso-legal" style="color: #ffc107;">Política de Privacidad</a>
            </label>
        </div>
        <button type="submit">ENVIAR</button>
    </form>
            </div>
        </div>
    </div>

    
<footer class="bg-dark text-white pt-5 pb-4">
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
      
</body>
</html>

