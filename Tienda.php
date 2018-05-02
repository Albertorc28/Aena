<?php

class Tienda{
    var $nombre;
    var $numlocal;
    var $metroscuad;

    function __construct($nombre,$nomlocal,$metroscuad){
        $this->nombre=$nombre;
        $this->numlocal= $numlocal;
        $this->metroscuad=$metroscuad;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getNumlocal (){
        return $this->numlocal;
    }

    function setNumlocal ($numlocal){
        $this->numlocal = $numlocal;
    }

    function getMetroscuad (){
        return $this->metrosCuad;
    }

    function setMetroscuad ($metroscuad){
        $this->metroscuad = $metroscuad;
    }
}