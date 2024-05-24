<?php

require_once "autoloader.php";
session_start();
$object = new Mostrar();
$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
$nom = $info['nombre'];
$object->modificar($nom);
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
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
        }

        .content {
            margin-bottom: 50px;
        }

        .container-eliminar {
            text-align: center;
            margin-top: 50px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-button:hover,
        .close-button:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .profile-container {
    display: flex;
    margin-left: 20px;
    align-items: center;
    margin-top: 20px;
}

.profile-picture {
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 50%;
    border: 3px solid #ccc;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.profile-picture img {
    width: 100%;
    height: auto;
    display: block;
}
.nav-link:hover {
    color: #ffd700 !important;
}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButton = document.getElementById('deleteButton');
            const deleteModal = document.getElementById('deleteModal');
            const closeButton = document.querySelector('.close-button');
            const cancelButton = document.getElementById('cancelButton');

            deleteButton.addEventListener('click', () => {
                deleteModal.style.display = 'block';
            });

            closeButton.addEventListener('click', () => {
                deleteModal.style.display = 'none';
            });

            cancelButton.addEventListener('click', () => {
                deleteModal.style.display = 'none';
            });

            window.addEventListener('click', (event) => {
                if (event.target == deleteModal) {
                    deleteModal.style.display = 'none';
                }
            });
        });
    </script>
</head>
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
                    <a class="nav-link" href="destino.php "style="color:white;">Destino</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"style="color:white;">Contacto</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link" href="perfil.php" title="<?= $security->getUserData() ?>">
                    <i style="color: white; font-size: 2em;" class="d-block w-100 bi bi-person-circle"></i>
                </a>
            </form>
        </div>
    </div>
</nav>
<div class="content container mt-5">
    <div class="card content">
        <div class="card-header">
            <h3>Datos del Usuario</h3>
        </div>
    <div class="profile-container">
        <div class="profile-picture">
            <img src='perfiles/<?php echo $info["nombre"]; ?>.jpg' alt="Foto de Perfil">
        </div>
    </div>
        <div class="card-body">
            <form action="foto_perfil.php?nombre=<?php echo $info['nombre']; ?>" method="POST" enctype="multipart/form-data">
                <label for="photo">Selecciona una foto</label><br>
                <input type="file" id="photo" name="photo" required><br><br>
                <button type="submit">Subir Imagen</button>
            </form>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de Usuario:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $info["nombre"]; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $info['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="provincia" class="form-label">Provincia</label>
                    <select name="provincia" class="form-select" id="provincia" required>
                        <option value="" selected disabled><?php echo $info['provincia']; ?></option>
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
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <input id="saveForm" class="btn btn-primary" type="submit" name="submit" value="Modificar">
                        <a href="index.php"><button class="btn btn-primary" type="button" style="margin-right: 10px;">Cerrar sesión</button></a>
                    </div>
                    <div class="container-eliminar">
                        <button id="deleteButton" class="btn btn-danger" type="button">Eliminar cuenta</button>
                    </div>

                    <div id="deleteModal" class="modal">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <h2>¿Seguro que quieres eliminar esta cuenta?</h2>
                            <p>Esta acción no se puede deshacer. Todos tus datos serán permanentemente eliminados.</p>
                            <div class="modal-buttons">
                                <button class="btn btn-secondary" id="cancelButton">Cancelar</button>
                                <a href="eliminar_cuenta.php?nombre=<?php echo $info['nombre']; ?>"><button class="btn btn-danger" id="confirmDeleteButton" type="button">Eliminar</button></a>
                            </div>
                        </div>
                    </div>    
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Nombre de la compañía</h5>
                <p>Playa finder</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Proveedores</h5>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Tony pizzeria</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Alcasser</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Carcaixent</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Sabadell</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links de interés</h5>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Cuenta</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Hazte miembro</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Envios</a></p>
                <p><a href="https://tonipizzeria.com/index.php/181-alcacer-new" class="text-white" style="text-decoration: none;">Información productos</a></p>
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
</body>
</html>
