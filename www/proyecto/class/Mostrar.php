<?php

class Mostrar extends Connection
{

    function import($file)
    {
        $conn = $this->getConn();
        $query = "DELETE FROM `Playa`";
        $result = mysqli_query($conn, $query);

        $gestor = fopen($file, "r");
        $query = "INSERT INTO `Playa`(`nombre`, `ciudad`, `Valoracion`, `descripcion`) VALUES (?,?,?,?)";

        while (($element = fgetcsv($gestor)) !== false) {
            $nombre = $element[0];
            $ciudad = $element[1];
            $valoracion = $element[2];
            $descripcion = $element[3];

            $ready = $conn->prepare($query);
            $ready->bind_param("ssss", $nombre, $ciudad, $valoracion, $descripcion);
            $ready->execute();
            $result = $ready->get_result();
            $ready->close();
        }
        fclose($gestor);
    }

    function getAllPlayas()
    {
        $array = [];
        $conn = $this->getConn();
        $query = "SELECT * FROM `Playa`";
        $result = mysqli_query($conn, $query);
        $total = $result->num_rows;
        $cont = 0;
        while ($cont < $total) {
            $result->data_seek($cont);
            $info = $result->fetch_array(MYSQLI_ASSOC);
            $nombre = $info["nombre"];
            $ciudad = $info["ciudad"];
            $valoracion = $info["Valoracion"];
            $descripcion = $info["descripcion"];

            $object = new Playa($nombre, $ciudad, $valoracion, $descripcion);

            array_push($array, $object);
            $cont++;
        }
        return ($array);
    }

    function showCards($array, $filtro, $user)
    {
        $output = "";
        $cont = 0;
        $output = "<div class='row row-cols-1 row-cols-md-3 g-4'>";
        foreach ($array as $element) {
            $nombre = $element->getNombre();
            $ciudad = $element->getCiudad();
            $valoracion = $this->valoracion($nombre);
            $descripcion = $element->getDescripcion();
            if ($ciudad == $filtro) {
                $output .= "<div class='col'>
                        <div class='content card h-100 card-hover'>
                        <img src='img/$nombre.jpeg' class='card-img-top'>
                        <div class='card-body'>";
                $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                <p class='card-text' style='font-size: 20px;'> $valoracion</p>
                </div>";
            $output .= "<div class='card-footer'>
            <a href='playa.php?nombre=$nombre&imagen=$nombre.jpeg' class='btn btn-primary'>Mas info</a>";
            if ($user == 'admin') {
            
            $output .= "<a href='eliminar_playa.php?nombre=$nombre' class='btn-custom'>Eliminar</a>";
            }
            $output .= "<a href='javascript:void(0);' class='btn btn-secondary' onclick='mostrarDesplegable(this)'>
                <i class='bi bi-chevron-down'></i>
            </a>
            <div class='desplegable' style='display: none;'>
                <p>$descripcion</p>
            </div>
        </div></div></div>";
            } elseif ($filtro == 0) {
                $output .= "<div class='col'>
                        <div class='content card h-100 card-hover'>
                        <img src='img/$nombre.jpeg' class='card-img-top'>
                        <div class='card-body'>";
                $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                <p class='card-text' style='font-size: 20px;'> $valoracion</p>
                </div>";
            $output .= "<div class='card-footer'>
            <a href='playa.php?nombre=$nombre&imagen=$nombre.jpeg' class='btn btn-primary'>Mas info</a>";
            if ($user == 'admin') {
            
                $output .= "<a href='eliminar_playa.php?nombre=$nombre' class='btn btn-danger'>Eliminar</a>";
                }
                $output .= "<a href='javascript:void(0);' class='btn btn-secondary' onclick='mostrarDesplegable(this)'>
                    <i class='bi bi-chevron-down'></i>
                </a>
                <div class='desplegable' style='display: none;'>
                    <p>$descripcion</p>
                </div>
            </div></div></div>";
            }

        }
        return $output;
    }

    function valoracion($nombre)
    {
        $valoracion = 0;
        $output = "";
        $conn = $this->getConn();
        $query = "SELECT `Valoracion` FROM `Playa` WHERE `nombre` = '$nombre'";
        $result = mysqli_query($conn, $query);
        $valoracion = $result->fetch_array(MYSQLI_ASSOC);
        $cont = 0;
        $valoracion = $valoracion['Valoracion'];
        while ($cont < 5) {
            if ($valoracion > 0) {
                $output .= "★";
                $valoracion = $valoracion - 1;
            } else {
                $output .= "✩";
            }
            $cont++;
        }
        return $output;
    }

    public function modificar($nom)
    {
        if (count($_POST) > 0) {
            $nombre = $_POST['name'];
            $email = $_POST['email'];
            $provincia = $_POST['provincia'];
            $conn = $this->getConn();
            $query = "UPDATE `Usuario` SET `nombre`='$nombre',`email`='$email',`provincia`='$provincia' WHERE `nombre` = '$nom'";
            $result = mysqli_query($conn, $query);

        } else {
            return null;
        }
        header("location: login.php");
    }

    public function getPlaya($nombre, $array)
    {
        $playa = [];
        foreach ($array as $element) {
            $name = $element->getNombre();
            if ($name == $nombre) {
                array_push($playa, $element);
            }
        }
        return $playa;
    }

    public function comentar($nombre, $fecha, $playa, $imagen)
    {
        if (count($_POST) > 0) {
            $comentario = $_POST['comment'];
            $conn = $this->getConn();
            $query = "INSERT INTO `Comentario`(`opinion`, `fecha`, `user_name`, `nombre_playa`) VALUES ('$comentario','$fecha','$nombre','$playa')";
            $result = mysqli_query($conn, $query);

        } else {
            return null;
        }
        header("location: playa.php?nombre=$playa&imagen=$imagen");
    }

    public function getComents($playa)
    {
        $array = [];
        $conn = $this->getConn();
        $query = "SELECT * FROM `Comentario`";
        $result = mysqli_query($conn, $query);
        $total = $result->num_rows;
        $cont = 0;
        while ($cont < $total) {
            $result->data_seek($cont);
            $info = $result->fetch_array(MYSQLI_ASSOC);
            $id = $info['id'];
            $nombre = $info["user_name"];
            $playa_nom = $info['nombre_playa'];
            $coment = $info['opinion'];
            $fecha = $info['fecha'];

            $element = [$id, $nombre, $playa_nom, $coment, $fecha];

            if ($playa == $playa_nom) {
                array_push($array, $element);
            }

            $cont++;
        }
        return ($array);
    }

    public function showComents($array, $usuario)
    {
        $output = "";
        $imagen = $_GET['imagen'];
        $cont = 0;
        foreach ($array as $element) {
            $output .= "<div class='comment-card'>";
            $id = $element[0];
            $nombre = $element[1];
            $playa = $element[2];
            $fecha = $element[4];
            $coment = $element[3];
            $output .= "<h3>Usuario: $nombre</h3>
            <p class='date'>Fecha: $fecha</p>
            <div class='comment-text'>$coment</div>";
            if ($usuario == $nombre) {
                $output .= "<a href='eliminar-com.php?id=$id&playa=$playa&imagen=$imagen'><button class='delete-button'>Eliminar</button></a>";
            }
            if ($usuario == "admin") {
                $output .= "<a href='eliminar-com.php?id=$id&playa=$playa&imagen=$imagen'><button class='delete-button'>Eliminar</button></a>";
            }
            $output .= "</div>";
        }
        return $output;
    }

    public function deleteComent($id)
    {
        $conn = $this->getConn();
        $query = "DELETE FROM `Comentario` WHERE `id` = $id";
        $result = mysqli_query($conn, $query);
    }

    public function fivestar($array)
    {
        $carousel = "";
        $cont = 0;
        $carousel .= "<div class='carousel-wrapper'>
            <div class='owl-carousel owl-theme'>";

        foreach ($array as $element) {
            // Verificar que el elemento tenga los métodos necesarios
            if (
                method_exists($element, 'getNombre') && method_exists($element, 'getCiudad') &&
                method_exists($element, 'getValoracion') && method_exists($element, 'getDescripcion')
            ) {

                $nombre = $element->getNombre();
                $ciudad = $element->getCiudad();
                $valoracion = $element->getValoracion();
                $descripcion = $element->getDescripcion();
                $cont++;
                if ($valoracion == 5) {

                    $carousel .= "<div class='item carousel-item-custom'>
                        <img src='img/$nombre.jpeg' alt='' class='carousel-img'>
                        <h3>$nombre</h3>
                        <h4>$ciudad</h4>
                        <p>$descripcion</p>
                        <a href='playa.php?nombre=$nombre&imagen=$nombre.jpeg'>READ MORE</a>
                    </div>";
                }
            }
        }

        // Cerrar las etiquetas HTML abiertas
        $carousel .= "</div></div>";

        return $carousel;
    }

    public function eliminarCuenta($nombre)
    {
        $conn = $this->getConn();
        $query = "DELETE FROM `Usuario` WHERE `nombre` = '$nombre'";
        $result = mysqli_query($conn, $query);
    }

    public function nuevaPlaya($nombre, $ciudad, $valoracion, $descripcion, $imagen)
    {
        if (count($_POST) > 0) {
            $conn = $this->getConn();
            $query = "INSERT INTO `Playa`(`nombre`, `ciudad`, `Valoracion`, `descripcion`) VALUES ('$nombre', '$ciudad', '$valoracion', '$descripcion')";
            $result = mysqli_query($conn, $query);
        } else {
            return null;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $targetDir = "img/";
            $_FILES['imagen']['name'] = "$nombre.jpeg";
            // Check if a file is uploaded
            if (!empty($_FILES["imagen"]["name"])) {

                $targetFile = $targetDir . basename($_FILES["imagen"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["imagen"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "El archivo no es una imagen.";
                    $uploadOk = 0;
                }
                if ($_FILES["imagen"]["size"] > 5000000) {
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
                    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
                        $imagePath = $targetFile;

                    } else {
                        echo "Lo siento, hubo un error al subir tu archivo.";
                        return;
                    }
                }
            }
        }

    }

    public function deletePlaya($nombre)
    {
        $conn = $this->getConn();
        $query = "DELETE FROM `Playa` WHERE `nombre` = '$nombre'";
        $result = mysqli_query($conn, $query);
    }

}

?>