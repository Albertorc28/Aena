<?php

require_once("CompaniaAerea.php");

class Gamma extends CompaniaAerea{
    var $anofund;

    function __construct($nombre,$telefono,$anofund){
        parent:: __construct($nombre,$telefono);
        $this->anofund=$anofund;
    }

    function getAnofund (){
        return $this->anofund;
    }

    function setAnofund ($anofund){
        $this->anofund = $anofund;
    }
}
