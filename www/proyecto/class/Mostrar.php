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
}

?>