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
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Registrarse</h3>
          <h4><?=$registerMessage?></h4>
        </div>
        <div class="card-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input name="phone" type="tel" class="form-control" id="phone" placeholder="Ingresa tu número de teléfono" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="mb-3">
              <label for="localidad" class="form-label">Localidad</label>
              <input name="localidad" type="text" class="form-control" id="localidad" placeholder="Ingresa tu localidad" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
