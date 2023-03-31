<?php
class Viaje{

    private $codigo;
    private $destino;
    private $cantMaxP;
    private $pasajeros = [];

    //constructor
    public function __construct($codigo, $destino, $cantMaxP)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantMaxP = $cantMaxP;
    
    }

    //Observadores y Modificadores

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }


    public function getDestino()
    {
        return $this->destino;
    }


    public function setDestino($dest)
    {
        $this->destino = $dest;

        return $this;
    }


    public function getCantMaxP()
    {
        return $this->cantMaxP;
    }


    public function setCantMaxP($cantMax)
    {
        $this->cantMaxP = $cantMax;

        return $this;
    }
    
    //array
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    public function setPasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;
    }

    //recorre el array asociativo y muestra los valores
    public function verPasajeros()
    {

        $arrayPasajeros = $this->pasajeros;
        $mensaje = "";

        foreach ($arrayPasajeros as $pasajero) {
            $mensaje .= $pasajero["nombre"] . " " . $pasajero["apellido"] . " " . $pasajero["documento"] . "\n";
        }
        return $mensaje;
    }

    //Muestra por pantalla los datos del viaje y pasajeros
    //llama a la funcion varPasajeros() para mostrar los datos de pasajeros
    public function __toString()
    {
        return "Codigo Viaje: " . $this->getCodigo() . "\nDestino: " . $this->getDestino() . "\nCantidad maxima de pasajeros: " . $this->getCantMaxP() . "\nPasajeros: \n" . $this->verPasajeros() . "\n";
    }

    //setea codigo nuevo del viaje
    public function codigoNuevo($nuevo_Codigo)
    {
        $this->setCodigo($nuevo_Codigo);
        return "El codigo nuevo de {$this->getDestino()} es: {$this->getCodigo()}";
    }

    //agrega los datos de un pasajero en el array 
    //@nombre @apellido @documento
    public function agregarPasajero($nombre, $apellido, $documento)
    {
        if (count($this->pasajeros) < $this->cantMaxP) {

            $pasajero = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'documento' => $documento
            );
            array_push($this->pasajeros, $pasajero);
            return true;
        } else {
            return false;
        }
    }

    //Modifica el destino del viaje
    //@dest
    public function modificarDestino($dest)
    {
        $this->destino = $dest;
    }

    //Modifica la cantidad maxima de pasajeros en el viaje
    public function modificarMaxPasajeros($CantMaxP)
    {
        $this->cantMaxP = $CantMaxP;
    }

    //Modifica los datos de los pasajeros en el array
    public function modificarPasajero($index, $nombre, $apellido, $documento)
    {
        $this->pasajeros[$index]["nombre"] = $nombre;
        $this->pasajeros[$index]["apellido"] = $apellido;
        $this->pasajeros[$index]["documento"] = $documento;
    }

    //Elimina el pasajero del array
    //@documento
    public function eliminarPasajero($documento)
    {
        foreach ($this->pasajeros as $index => $pasajero) {
            if ($pasajero["documento"] == $documento) {
                array_splice($this->pasajeros, $index, 1);
                echo "Pasajero eliminado exitosamente.\n";
                return;
            }
        }
        echo "No se encontró al pasajero con el número de documento ingresado.\n";
    }
}
