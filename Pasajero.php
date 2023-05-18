<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $telefono;
    private $documento;
    private $nroAsiento;
    private $nroTicket;

public function __construct($nombre,$apellido,$telefono,$documento,$numero,$ticket){
    $this->nombre= $nombre;
    $this->apellido= $apellido;
    $this->telefono= $telefono;
    $this->documento= $documento;
    $this->nroAsiento= $numero;
    $this->nroTicket= $ticket;
    
}

    public function getNombre()
    {
        return $this->nombre;
    }

   
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    
    public function getTelefono()
    {
        return $this->telefono;
    }

    
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    
    public function getDocumento()
    {
        return $this->documento;
    }

    
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    public function getNroAsiento(){
        return $this->nroAsiento;
    }

    public function setNroAsiento($numero){
        $this->nroAsiento= $numero;
    }

    public function getNroTicket(){
        return $this->getNroTicket;
    }

    public function setNroTicket($ticket){
        $this->nroTicket= $ticket;
    }

    //Metodos
    public function __toString(){
        return "Nombre: ". $this->getNombre(). " Apellido: ". $this->getApellido() . " Telefono: ". $this->getTelefono(). " Nro de Documento: ". $this->getDocumento(). "\n". "Datos Pasaje \nNumero Asiento: ".$this->getNroAsiento()." Numero Ticket: ".$this->getNroTicket(). "\n";
    }

    //retorna un porcentaje
    //@return $porcentaje
    public function darPorcentajeIncremento(){
        $porcentaje= 1.10 ;

        return $porcentaje;
    }
}
