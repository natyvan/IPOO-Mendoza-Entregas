<?php
include_once("Pasajero.php");

class PasajeroEspecial extends Pasajero{
    //Atributos
    private $sillaRuedas;
    private $asistenciaEmbarque;
    private $comidaEspecial;
    

    //Constructor
    public function __construct(
        $nombre,
        $apellido,
        $telefono,
        $documento, 
        $silla, 
        $asistencia,
        $comida
    )
    {
        parent::__construct($nombre,$apellido,$telefono,$documento);

        $this->sillaRuedas= $silla;
        $this->$asistenciaEmbarque= $asistencia;
        $this->comidaEspecial=$comida;
    }

    public function setSillaRuedas($silla){
        $this->sillaRuedas= $sillas;
    }
    public function setAsistenciaEmbarque($asistencia){
        $this->asistenciaEmbarque=$asistencia;
    }
    public function setComidaEspecial($comida){
        $this->comidaEspecial=$comida;
    }

    public function getSillaRuedas(){
        return $this->sillaRuedas;
    }
    public function getAsistenciaEmbarque(){
        return $this->asistenciaEmbarque;
    }
    public function getComidaEspecial(){
        return $this->comidaEspecial;
    }

    //Metodos
    public function __toString(){
        $cadena= parent::__toString();
        $cadena.= ("Silla de Ruedas: ".$this->getSillaRuedas()." Asistencia: ".$this->getAsistenciaEmbarque()." Comida Especial: ".$this->getComidaEspecial()."\n");
    }

    public function darPorcentajeIncremento(){
        $porcentaje= parent::darPorcentajeIncremento();

       // $porcentaje= $porcentaje + 0.25;

        if($this->getSillaRuedas() && $this->getComidaEspecial() && $this->getAsistenciaEmbarque()){
            $porcentaje+=0.20;

        }else if($this->getSillaRuedas() || $this->getComidaEspecial() || $this->getAsistenciaEmbarque()){
            $porcentaje+= 0.05;
        }

        return $porcentaje;
    }

}