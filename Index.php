<?php

require_once("Agencia.php");


$ag1= new Agencia("AENA");


$e1= new AltaDireccion("Juan","23-12-1979","54");
$ag1->altaEmpleado($e1);


$a1= new Internacional("BCN","490249044","729348527","8","13");
$ag1->altaAeropuerto($a1);


$ca1= new Alpha("IBERIA","924989884","B4545");
$ag1->altaCompaniaAerea($ca1);




$e2= new ControlAereo("Pepe","15-03-1986","200");
$ag1->altaEmpleado($e2);
$ag1->bajaEmpleado("Pepe");


$a2= new Aeropuerto("NY","892598347","568745894");
$ag1->altaAeropuerto($a2);
$ag1->bajaAeropuerto("NY");


$ca2= new Gamma("RYAN AIR","94575757","1989");
$ag1->altaCompaniaAerea($ca2);
$ag1->bajaCompaniaAerea("RYAN AIR");




echo"<pre>";
print_r ($ag1);
echo"</pre>";