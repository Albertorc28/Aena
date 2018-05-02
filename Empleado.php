<?php

class Empleado{
    var $nombre;
    var $fechanac;

    function __construct ($nombre,$fechanac){
        $this->nombre = $nombre;
        $this->fechanac= $fechanac;
    }    
     
    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nommbre = $nombre;
    }

    function getFechanac (){
        return $this->fechanac;
    }

    function setFechanac ($fechanac){
        $this->fechanac = $fechanac;
    }
}
