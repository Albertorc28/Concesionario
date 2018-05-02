<?php

class Vehiculo{
    var $matricula;
    var $numRuedas;
    var $kms;

    function __construct ($matricula,$numRuedas,$kms){
        $this->matricula= $matricula;
        $this->numruedas=$numRuedas;
        $this->kms=$kms;
    }

    function getMatricula(){
        return $this->matricula;
    }

    function setMatricula($matricula){
        $this->matriucla=$matricula;
    }

    function getNumRuedas(){
        return $this->numRuedas;
    }
    
    function setNumRuedas($numRuedas){
        $this->numRuedas=$numRuedas;
    }

    function getKms(){
        return $this->kms;
    }

    function setKms($kms){
        $this->kms=$kms;
    }
} 


class Concesionario{
    var $ciudad;
    var $vehiculos;

    function __construct($ciudad,$vehiculos){
        $this->ciudad=$ciudad;
        $this->vehiculos=$ciudad;
    }

    function getCiudad(){
        return $this->ciudad;
    }

    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

    function getVehiculos(){
        return $this->vehiculos;
    }

    function setVehiculos(){
        $this->vehiculos=$vehiculos;
    }
}


class EmpresaTransporte{
    var $cif;
    var $clientes;
    var $vehiculos;

    function __construct($cif,$clientes,$vehiculs){
        $this->cif=$cif;
        $this->clientes=$clientes;
        $this->vehiculos=$vehiculos;
    }

    function getCif(){
        return $this->cif;
    }

    function setCif($cif){
        $this->cif=$cif;
    }

    function getClientes(){
        return $this->clientes;
    }

    function setClientes($clientes){
        $this->clientes=$clientes;
    }

    function getVehiculos(){
        return $this->vehiculos;
    }

    function setVehiculos($vehiculos){
        $this->vehiculos=$vehiculos;
    }
}


function altaVehiculo($vehiculo){
    $this->vehiculos[]=$vehiculos;
}


function bajaVehiculo($numMatricula){
    $enc=false;
    for($i=0;$i<count($this->vehiculos))&&(($enc=false);$i++){
        if($this->vehiculos[$i]!=null){
            if($numMatricula==$this->vehiculos[$i]->getMatricula()){
                $this->vehiculos[$i]=null;
                $enc=true;
            }
        }
    }
}


function matricularVehiculo(){
//---$aleatorio= rand();---

    $enc=false;
    $pos=0;
    for($i=0;$i<count($this->vehiculos))&&(($enc=false);$i++){
        if($this->vehiculos[$i]!=null){
            if($this->vehiculos[$i]->matricula==''){
                $this->vehiculos[$i]->setMatricula(rand);
                $pos=$i;
                $enc=true;
            }
        }
    }
    return $this->vehiculos[$pos];
}


function venderVehiculos(){
    $aux=$this->matriculaVehiculo();
    $this->bajaVehiculo($aux);
}





