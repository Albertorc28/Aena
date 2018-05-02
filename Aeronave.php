<?php

class Aronave{
    var $marca;
    var $modelo;
    var $plazas;

    function __construct($marca,$modelo,$plazas){
        $this->marca=$marca;
        $this->modelo= $modelo;
        $this->plazas=$plazas;
    }

    function getMarca (){
        return $this->marca;
    }

    function setMarca ($marca){
        $this->marca = $marca;
    }

    function getModelo (){
        return $this->modelo;
    }

    function setModelo ($modelo){
        $this->modelo = $modelo;
    }

    function getPlazas (){
        return $this->plazas;
    }

    function setPlazas ($plazas){
        $this->plazas = $plazas;
    }
}