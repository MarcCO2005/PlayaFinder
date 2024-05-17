<?php

session_start();
require_once "autoloader.php";

$data = new Mostrar;

$result = $data->importLamps('playas.csv');

?>