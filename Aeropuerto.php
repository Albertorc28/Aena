<?php

require_once("Vuelo.php");
require_once("Pista.php");
require_once("Tienda.php");

class Aeropuerto{
    var $den;
    var $lat;
    var $long;
    var $vuelos;
    var $pistas;
    var $tiendas;

    function __construct ($den,$lat,$long){
        $this->den = $den;
        $this->lat= $lat;
        $this->long= $long;
        $this->vuelos= array();
        $this->pistas= array();
        $this->tiendas= array();
    }    
     
    function getDen (){
        return $this->den;
    }

    function setDen ($den){
        $this->den = $den;
    }

    function getLat(){
        return $this->lat;
    }

    function setLat ($lat){
        $this->lat = $lat;
    }

    function getLong (){
        return $this->long;
    }

    function setLong ($long){
        $this->long = $long;
    }
}