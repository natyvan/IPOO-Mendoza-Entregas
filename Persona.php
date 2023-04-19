<?php
class Persona{
    private $nombre;
    private $apellido;
    private $telefono;
    private $documento;

public function __construct($nombre,$apellido,$telefono,$documento){
    $this->nombre= $nombre;
    $this->apellido= $apellido;
    $this->telefono= $telefono;
    $this->documento= $documento;
    
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

    
    public function gettelefono()
    {
        return $this->telefono;
    }

    
    public function settelefono($telefono)
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

    public function __toString(){
        return "Nombre: ". $this->getNombre(). " Apellido: ". $this->getApellido() . " Telefono: ". $this->gettelefono(). " Nro de Documento: ". $this->getDocumento(). "\n";
    }
}