<?php

class Mostrar extends Connection{

    function import($file){
        $conn= $this->getConn();
        $query = "DELETE FROM `Playa`";
        $result = mysqli_query($conn, $query);

        $gestor = fopen($file, "r");
        $query = "INSERT INTO `Playa`(`nombre`, `ciudad`, `codigo_postal`, `id_categoria`, `Valoracion`, `descripcion`) VALUES (?,?,?,?,?,?)";
        
        while (($element = fgetcsv($gestor)) !== false) {
            $nombre = $element[0];
            $ciudad = $element[1];
            $cod_post = $element[2];
            $cat = $element[3];
            $valoracion = $element[4];
            $descripcion = $element[5];

            $ready = $conn->prepare($query);
            $ready->bind_param("ssssss", $nombre, $ciudad, $cod_post, $cat, $valoracion, $descripcion);
            $ready->execute();
            $result = $ready->get_result();
            $ready->close();
        }
        fclose($gestor);
    }

    function getAllPlayas(){
        $array = [];
        $conn= $this->getConn();
        $query = "SELECT * FROM `Playa`";
        $result = mysqli_query($conn, $query);
        $total = $result->num_rows;
        $cont = 0;
        while ($cont < $total) {
            $result->data_seek($cont);
            $info = $result->fetch_array(MYSQLI_ASSOC);
            $nombre = $info["nombre"];
            $ciudad = $info["ciudad"];
            $cod_post = $info["codigo_postal"];
            $cat = $info["id_categoria"];
            $valoracion = $info["Valoracion"];
            $descripcion = $info["descripcion"];

            $object = new Playa($nombre, $ciudad, $cod_post, $cat, $valoracion, $descripcion);

            array_push($array, $object);
            $cont++;
        }
        return($array);
    }

    function showCards($array, $filtro) {
        $output = "";
        $cont = 0;
        $output = "<div class='row row-cols-1 row-cols-md-3 g-4'>";
        foreach ($array as $element) {
            $cont++;
            $nombre = $element->getNombre();
            $ciudad = $element->getCiudad();
            $valoracion = $this->valoracion($nombre);
            $descripcion = $element->getDescripcion();
            if ($ciudad == $filtro) {
                $output .= "<div class='col'>
                        <div class='content card h-100 card-hover'>
                        <img src='img/playa$cont.jpeg' class='card-img-top'>
                        <div class='card-body'>";
            $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                <p class='card-text' style='font-size: 20px;'> $valoracion</p>
                </div>";
            $output .= "<div class='card-footer'>
            <a href='playa.php?nombre=$nombre&imagen=playa$cont.jpeg' class='btn btn-primary'>Mas info</a>
            <a href='javascript:void(0);' class='btn btn-secondary' onclick='mostrarDesplegable(this)'>
                <i class='bi bi-chevron-down'></i>
            </a>
            <div class='desplegable' style='display: none;'>
                <p>$descripcion</p>
            </div>
        </div></div></div>";
            } elseif ($filtro == 0) {
                $output .= "<div class='col'>
                        <div class='content card h-100 card-hover'>
                        <img src='img/playa$cont.jpeg' class='card-img-top'>
                        <div class='card-body'>";
            $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                <p class='card-text' style='font-size: 20px;'> $valoracion</p>
                </div>";
            $output .= "<div class='card-footer'>
            <a href='playa.php?nombre=$nombre&imagen=playa$cont.jpeg' class='btn btn-primary'>Mas info</a>
            <a href='javascript:void(0);' class='btn btn-secondary' onclick='mostrarDesplegable(this)'>
                <i class='bi bi-chevron-down'></i>
            </a>
            <div class='desplegable' style='display: none;'>
                <p>$descripcion</p>
            </div>
        </div></div></div>";}
                        
        }
        return $output;
    }

    function valoracion($nombre){
        $valoracion = 0;
        $output = "";
        $conn= $this->getConn();
        $query = "SELECT `Valoracion` FROM `Playa` WHERE `nombre` = '$nombre'";
        $result = mysqli_query($conn, $query);
        $valoracion = $result->fetch_array(MYSQLI_ASSOC);
        $cont = 0;
        $valoracion = $valoracion['Valoracion'];
        while ($cont < 5) {
            if ($valoracion > 0) {
                $output .= "★";
                $valoracion = $valoracion - 1;
            } else{
                $output .= "✩";
            }
            $cont++;
        }
        return $output;
    }

    public function modificar($nom){
        if (count($_POST) > 0) {
            $nombre = $_POST['name'];
            $email = $_POST['email'];
            $provincia = $_POST['provincia'];
            $conn= $this->getConn();
            $query = "UPDATE `Usuario` SET `nombre`='$nombre',`email`='$email',`provincia`='$provincia' WHERE `nombre` = '$nom'";
            $result = mysqli_query($conn, $query);

        } else {
            return null;
        }
        header("location: login.php");
    }

    public function getPlaya($nombre, $array){
        $playa = [];
        foreach ($array as $element) {
            $name = $element->getNombre();
            if ($name == $nombre) {
                array_push($playa, $element);
            }
        }
        return $playa;
    }

    public function comentar($nombre, $fecha, $playa, $imagen){
        if (count($_POST) > 0) {
            $comentario = $_POST['comment'];
            $conn= $this->getConn();
            $query = "INSERT INTO `Comentario`(`opinion`, `fecha`, `user_name`, `nombre_playa`) VALUES ('$comentario','$fecha','$nombre','$playa')";
            $result = mysqli_query($conn, $query);

        } else {
            return null;
        }
        header("location: playa.php?nombre=$playa&imagen=$imagen");
    }

    public function getComents($playa){
        $array = [];
        $conn= $this->getConn();
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

            $element=[$id, $nombre, $playa_nom, $coment, $fecha];

            if ($playa == $playa_nom) {
                array_push($array, $element);
            }
            
            $cont++;
        }
        return($array);
    }

    public function showComents($array){
        $output = "";
        $cont = 0;
        foreach ($array as $element) {
            $output .= "<div class='comment-card'>";
            $nombre = $element[1];
            $fecha = $element[4];
            $coment = $element[3];
            $output .= "<h3>Usuario: $nombre</h3>
            <p class='date'>Fecha: $fecha</p>
            <div class='comment-text'>$coment</div>
            </div>";
    }
    return $output;
    }
}
           
?>