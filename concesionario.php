<?php

class vehiculo{
    var $matricula;
    var $numRuedas;
    var $kms;
    
    
    function __construct ($matr, $numr, $kms) {
        $this->matricula = $matr;
        $this->numruedas = $numr;
        $this->kms = $kms;
    }

    function getMatricula () {
        return $this->matricula;
    }

    function setMatricula ($matric) {
        $this->matricula = $matric;
    }

    function getNumruedas() {
        return $this->numruedas;
    }

    function setNumruedas($numruedas) {
        $this->numruedas = $numruedas;
    }

    function getKms () {
        return $this->kms;
    }

    function setKms($kms) {
        $this->kms = $kms;
    }
}


class concesionario{
    var $ciudad;
    var $vehiculos;


    //alta vehiculo
    //baja vehiculo
    //vender vehiculo (baja en el sistema y matriculo vehiculo)
    //matricular vehiculo


    function __construct ($concesionario){
        $this->ciudad=$ciudad;
        $this->vehiculos=$vehiculos;
    }

    function getCiudad(){
        return $this->ciudad;
    }

    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

    function getVehiculo(){
        return $this->vehiculos;
    }

    function setVehiculo($vehiculo){
        $this->vehiculos=$vehiculos;
    }

    
   
    function addVehiculo($vehiculo){
        $this->vehiculos[]=$vehiculo;
    }


    function remVehiculo($numMatricula){
        $enc=false;
        for($i=0;$i<count($this->vehiculos))&&($enc==false;$i++){
            if($this->vehículos[$i]!= null){
                if($numMatricula==$this->vehiculo[$i]->getMatricula()){
                    $this->vehiculos[$i]= null;
                    $enc=true;
                }
            }
        }
    }


    function matricularVehiculo(){
        //suponemos que se conecta con la DGT y devuelve el numero de matricula
        $mat_aleatoria= rand();

        $enc=false;
        $pos=0;
        for($i=0;$i<count($this->vehiculos)&&($enc==false;$i++){
            if($this->vehículos[$i]!= null){
                if($this->vehículos[$i]!= null){
                    $this->vehiculos[$i]->setMatricula($mat_aleatoria);
                    $enc=true;
                    $pos=$i;
                }
            }    
        } 
        return $this->vehiculos[$pos];
    }

   
    function venderVehiculo(){
        $vaux= $this->matriculaVehiculo();
        $this->bajaVehiculo($vaux->getMatricula());
    }
}





class empresaTransporte{
    var $cif;
    var $clientes;
    var $vehiculos;

    //comprar vehiculo
    //recoger paquete
    //entregar paquete
    //alta cliente
}







