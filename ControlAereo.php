<?php

require_once("Empleado.php");

class ControlAereo extends Empleado{
    var $numhoras;

    function __construct ($nombre,$fechanac,$numhoras){
        parent:: __construct($nombre,$fechanac);
        $this->numhoras = $numhoras;
    }    
     
    function getNumhoras (){
        return $this->numhoras;
    }

    function setNumhoras ($numhoras){
        $this->numhoras = $numhoras;
    }
} 