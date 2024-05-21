<?php

require_once "autoloader.php";

$data = new Mostrar;

$nombre = $_GET['nombre'];
$email = $_POST['email'];
$provincia = $_POST['provincia'];
$nom = $_POST['nom'];

$data->modificar($nombre, $email, $provincia, $nom);


?>