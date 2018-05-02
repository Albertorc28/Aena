<?php

require_once("AltaDireccion.php");
require_once("ControlAereo.php");
require_once("PersonalOperativo.php");
require_once("Aeropuerto.php");
require_once("Internacional.php");
require_once("CompaniaAerea.php");
require_once("Alpha.php");
require_once("Gamma.php");

class Agencia{
    var $nombre;
    var $empleados;
    var $aeropuertos;
    var $companiaaereas;

    function __construct ($nombre){
        $this->nombre = $nombre;
        $this->empleados = array();
        $this->aeropuertos = array();
        $this->companiaaereas = array();
    }    
     
    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }


    function altaEmpleado ($empleado){
        if (count($this->empleados) == 0){
            $this->empleados[] = $empleado;
        }
        else {
            $aux = false;
            for ($i = 0; (($i < count($this->empleados)) && ($aux == false)); $i++){
                if ($this->empleados[$i] == null){
                    $this->empleados[$i] = $empleado;
                    $aux = true;
                }
            }
            if ($aux == false){
                /*
                for ($i = count($this->empleados); $i > 0; $i--){
                    $this->empleados[$i] = $this->empleados[$i-1];
                }
                $this->empleados[0] = $empleado;*/
                
                array_unshift($this->empleados,$empleado);
            }
        }     
    }

    function altaAeropuerto($aeropuerto){
        $this->aeropuertos[]=$aeropuerto;
    }

    function altaCompaniaAerea($companiaaerea){
        $this->companiaaereas[]=$companiaaerea;
    }








    function bajaEmpleado($nombre){
        $enc = false;
        for ($i = 0; $i < count ($this->empleados) && ($enc == false); $i++){
            if ($nombre == $this->empleados[$i]->getNombre()){
                    $this->empleados[$i] = null;
                    $enc = true;
            }
        }
    }

    function bajaAeropuerto($den){
        $enc = false;
        for ($i = 0; $i < count ($this->aeropuertos) && ($enc == false); $i++){
            if ($den == $this->aeropuertos[$i]->getDen()){
                    $this->aeropuertos[$i] = null;
                    $enc = true;
            }
        }
    }

    function bajaCompaniaAerea($nombre){
        $enc = false;
        for ($i = 0; $i < count ($this->companiaaereas) && ($enc == false); $i++){
            if ($nombre == $this->companiaaereas[$i]->getNombre()){
                    $this->companiaaereas[$i] = null;
                    $enc = true;
            }
        }
    }


}


