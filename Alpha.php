<?php

require_once("CompaniaAerea.php");

class Alpha extends CompaniaAerea{
    var $cod;
    
    function __construct($nombre,$telefono,$cod){
        parent:: __construct($nombre,$telefono);
        $this->cod=$cod;
    }

    function getCod (){
        return $this->cod;
    }

    function setCod ($cod){
        $this->cod = $cod;
    }
}