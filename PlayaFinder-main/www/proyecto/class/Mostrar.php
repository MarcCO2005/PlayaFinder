<?php

class Mostrar extends Connection{

    function importLamps($file){
        $conn= $this->getConn();
        $query = "DELETE FROM `Playa`";
        $result = mysqli_query($conn, $query);

        $gestor = fopen($file, "r");
        $query = "INSERT INTO `Playa`(`nombre`, `ciudad`, `codigo_postal`, `id_categoria`) VALUES (?,?,?,?)";
        
        while (($element = fgetcsv($gestor)) !== false) {
            $nombre = $element[0];
            $ciudad = $element[1];
            $cod_post = $element[2];
            $cat = $element[3];

            $ready = $conn->prepare($query);
            $ready->bind_param("ssss", $nombre, $ciudad, $cod_post, $cat);
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

            $object = new Playa($nombre, $ciudad, $cod_post, $cat);

            array_push($array, $object);
            $cont++;
        }
        return($array);
    }

    function showCards($array) {
        $output = "";
        $output = "<h1 style='text-align: center; margin: 50px; '>Playas</h1>
                    <div class='row row-cols-1 row-cols-md-3 g-4'>";
        foreach ($array as $element) {
            $nombre = $element->getNombre();
            $ciudad = $element->getCiudad();
            
           /* <h4><a href='changestatus.php?id=$nombre'><img src='img/bulb-icon-off.png'></a> $name </h4>*/
            $output .= "<div class='col'>
                        <div class='content card h-100' style='border-color: #2E4BF2;'>
                        <img src='img/img1.jpg' class='card-img-top'>
                        <div class='card-body'>";
            $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                </div>";
            $output .= "<div class='card-footer'>
                        <a href='https://alcacer.tonipizzeria.com/' class='btn btn-primary'>Mas info</a>
                        </div></div></div>";
        }
        return $output;
    }

}

?>