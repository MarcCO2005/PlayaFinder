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

}

?>