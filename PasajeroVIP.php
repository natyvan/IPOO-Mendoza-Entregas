<?php
include_once ("Pasajero.php");

Class PasajeroVIP extends Pasajero{

    //Atributos 
    private $nroViajeroFrecuente;
    private $cantMillas;

    //Constructor

    public function __construct($nombre,$apellido,$telefono,$documento, $nroViajero, $millas){
        parent::__construct($nombre,$apellido,$telefono,$documento);
        $this->nroViajeroFrecuente= $nroViajero;
        $this->cantMillas= $millas;
    }

    //Setter

    public function setNroViajeroFrecuente($numero){
        $this->setNroViajeroFrecuente=$numero;
    }

    public function setCantMillas($millas){
        $this->cantMillas= $millas;
    }

    //Getter

    public function getNroViajeroFrecuente(){
        return $this->nroViajeroFrecuente;
    }

    public function getCantMillas(){
        return $this->cantMillas;
    }

    public function __toString(){
        $cadena= parent::__toString();

        $cadena.= ("Nro Viajero Frecuente: {$this->getNroViajeroFrecuente()} \n
        Cantidad de MIllas: {$this->getCantMillas()}\n");
        return $cadena;

    }

    public function darPorcentajeIncremento(){
        $porcentaje= parent::darPorcentajeIncremento();

       // $porcentaje= $porcentaje + 0.25;

        if($this->getCantMillas() >300){
            $porcentaje+=0.20;

        }else{
            $porcentaje+= 0.25;
        }

        return $porcentaje;
    }

    
}