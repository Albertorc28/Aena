<?php

class Vuelo{
    var $numero;
    var $origen;
    var $fecha;
    var $hora;

    function __construct($numero,$origen,$fecha,$hora){
        $this->numero=$numero;
        $this->origen=$origen;
        $this->fecha=$fecha;
        $this->hora=$hora;
    }

    function getNumero (){
        return $this->numero;
    }

    function setNumero ($numero){
        $this->numero = $numero;
    }

    function getOrigen (){
        return $this->origen;
    }

    function setOrigen ($origen){
        $this->origen = $origen;
    }

    function getFecha (){
        return $this->fecha;
    }

    function setFecha ($fecha){
        $this->fecha = $fecha;
    }

    function getHora (){
        return $this->hora;
    }

    function setHora ($hora){
        $this->hora = $hora;
    }
}