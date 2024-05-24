<?php

class Playa {
    protected $nombre;
    protected $ciudad;
    protected $valoracion;
    protected $descripcion;

    function __construct($nombre, $ciudad, $valoracion, $descripcion){
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->valoracion = $valoracion;
        $this->descripcion = $descripcion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    public function getValoracion()
    {
        return $this->valoracion;
    }
    public function setValoracion($valoracion)
    {
        $this->valoracion = $valoracion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}

?>