<?php

require_once("Aeronave.php");

class CompaniaAerea{
    var $nombre;
    var $telefono;
    var $aeronaves;

    function __construct($nombre,$telefono){
        $this->nombre=$nombre;
        $this->telefono=$telefono;
        $this->aeronaves= array();
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getTelefono (){
        return $this->telefono;
    }

    function setTelefono ($telefono){
        $this->telefono = $telefono;
    }
}

