<?php

function fotoperf() {
    $targetDir = "Assets/event_picture/";

    if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] == UPLOAD_ERR_OK) {
        $_FILES['imageFile']['name'] = 'prueba.jpg';
        $targetFile = $targetDir . basename($_FILES["imageFile"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["imageFile"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
        if ($_FILES["imageFile"]["size"] > 5000000) {
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
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
                echo "El archivo " . htmlspecialchars(basename($_FILES["imageFile"]["name"])) . " ha sido subido.";
                $imagePath = $targetFile;
            } else {
                echo "Lo siento, hubo un error al subir tu archivo.";
                return;
            }
        }
    } 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    fotoperf();
    
    // Redirigir después de ejecutar la función fotoperf()
    header("Location: perfil.php");
    exit; // Asegurarse de que el script se detenga después de la redirección
}
?>
