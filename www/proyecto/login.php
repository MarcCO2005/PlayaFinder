<?php
require_once "autoloader.php";
$security = new Security();
$loginMessage = $security->doLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="form/view.css">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
</head>
<style>

body {
    background-image: url('img/fondo.png');
    background-size: cover;
    position: relative;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 800px;
    background-color: rgba(0, 0, 0, 0.5);
}

</style>
<body><div class="overlay"></div>
<nav class="navbar navbar-expand-sm navbar-dark transparent">
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
              
            </ul>
            <form class="d-flex">
              <a href="login.php"><button class="btn btn-primary" type="button"style="margin-right:10px" >Log In</button></a>
              <a href="register.php"><button class="btn btn-primary" type="button">Register</button></a>
          </form>
          </div>
        </div>
      </nav>

<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="form_container" class="card">
                <div class="card-header">
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="card-body">
                    <form class="appnitro" method="post" action="">
                        <div class="form_description">
                            <h2>Login</h2>
                            <h4><?=$loginMessage?></h4>
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label for="userName" class="form-label">Email</label>
                            <input name="userName" class="form-control" type="text" maxlength="255" value="">
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Password</label>
                            <input name="userPassword" class="form-control" type="password" maxlength="255" value="">
                        </div>
                        <div class="mb-3">
                            <input id="saveForm" class="btn btn-primary" type="submit" name="submit" value="Log In">
                        </div>
                    </form>
                    <div id="footer">
                        Generated by <a href="http://www.floridauniversitaria.es">Grupo 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="form/view.js"></script>

</body>
</html>

