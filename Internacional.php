<?php

require_once("Aeropuerto.php");

class Internacional extends Aeropuerto{
    var $terminales;
    var $pistas;
    
    function __construct($den,$lat,$long,$terminales,$pistas){
        parent:: __construct($den,$lat,$long);
        $this->terminales= $terminales;
        $this->pistas= $pistas;
    } 
    
    function getTerminales (){
        return $this->terminales;
    }

    function setTerminales ($terminales){
        $this->terminales = $terminales;
    }

    function getPistas (){
        return $this->pistas;
    }

    function setPistas ($pistas){
        $this->pistas = $pistas;
    }
}