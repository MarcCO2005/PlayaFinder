<?php
require_once "autoloader.php";

$nombre = $_GET['nombre'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "perfiles/";
    $_FILES['photo']['name'] = "$nombre.jpg";
        // Check if a file is uploaded
        if (!empty($_FILES["photo"]["name"])) {

            $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if ($check !== false) { 
                $uploadOk = 1;
            } else {
                echo "El archivo no es una imagen.";
                $uploadOk = 0;
            }
            if ($_FILES["photo"]["size"] > 5000000) {
                echo "Lo siento, tu archivo es demasiado grande.";
                $uploadOk = 0;
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Lo siento, tu archivo no fue subido.";
                return;
            } else {
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                    $imagePath = $targetFile;
                    
                } else {
                    echo "Lo siento, hubo un error al subir tu archivo.";
                    return;
                }
            }
        }
        header("location: perfil.php");
}


?>
