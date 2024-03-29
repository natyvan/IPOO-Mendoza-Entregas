<?php
include_once 'Viaje.php';
include_once 'Persona.php';
include_once 'ResponsableV.php';

$opcion = 0;
while($opcion != 10) {
  echo "-------- Menú --------\n";
  echo "1) Cargar información del viaje\n";
  echo "2) Modificar codigo del viaje\n";
  echo "3) Modificar destino del viaje\n";
  echo "4) Modificar cantidad maxima de pasajeros\n";
  echo "5) Agregar pasajero al viaje\n";
  echo "6) Modificar informacion de pasajero\n";
  echo "7) Eliminar un pasajero\n";
  echo "8) Agregar responsable del viaje \n";
  echo "9) Ver información del viaje\n";
  echo "10) Salir\n";
  echo "Ingrese una opción: ";
  $opcion = trim(fgets(STDIN));

  switch($opcion) {
    case 1:
      echo "Ingrese el código del viaje: ";
      $codigo = trim(fgets(STDIN));
      echo "Ingrese el destino del viaje: ";
      $destino = trim(fgets(STDIN));
      echo "Ingrese la cantidad máxima de pasajeros del viaje: ";
      $cant_max_pasajeros = trim(fgets(STDIN));
      echo "\n";
      $viaje= new Viaje($codigo, $destino, $cant_max_pasajeros);
      $viaje->setCodigo($codigo);
      $viaje->setDestino($destino);
      $viaje->setCantMaxP($cant_max_pasajeros);
      echo "¡Información del viaje cargada correctamente!\n";
      break;
    case 2:
        echo "Ingrese el nuevo codigo de viaje para su destino {$viaje->getDestino()}: ";
        $codigoNuevo = trim(fgets(STDIN));
        echo $viaje->codigoNuevo($codigoNuevo) . "\n";
        break;
    case 3:
        echo "Ingrese un nuevo destino del viaje: ";
        $destino= trim(fgets(STDIN));
        echo $viaje->modificarDestino($destino);
        break;
    case 4:
        echo "Ingrese nueva cantidad maxima de pasajeros: ";
        $maxPasajeros= trim(fgets(STDIN));
        echo $viaje->modificarMaxPasajeros($maxPasajeros);
        break;
    case 5:
        echo "Ingrese el nombre del pasajero: ";
        $nombre=trim(fgets(STDIN));
        echo "Ingrese el apellido del pasajero: ";
        $apellido= trim(fgets(STDIN));
        echo "Ingrese el telefono del pasajero: ";
        $telefono= trim(fgets(STDIN));
        echo "Ingrese el documento del pasajero: ";
        $documento= trim(fgets(STDIN));
        $objPersona= New Persona($nombre,$apellido,$telefono,$documento);
        $agregado= $viaje->agregarPasajero($objPersona);
        if($agregado){
            echo "Pasajero agregado correctamente! \n";
        }else{
            echo "No se pudo agregar, se supera la cantidad maxima de pasajeros o pasajero existente\n";
        }
        break;
    case 6:
        echo "Ingrese el documento del pasajero a modificar: ";
        $documentoABuscar= trim(fgets(STDIN));
        echo "Nuevo nombre del pasajero: ";
        $nuevoNombre= trim(fgets(STDIN));
        echo "Nuevo apellido del pasajero: ";
        $nuevoApellido= trim(fgets(STDIN));
        echo "Nuevo telefono del pasajero: ";
        $nuevoTelefono= trim(fgets(STDIN));
        $modificarPasaj= $viaje->modificarPasajero($documentoABuscar,$nuevoNombre,$nuevoApellido,$nuevoTelefono);
        if($modificarPasaj){
            echo "Pasajero modificado exitosamente \n";
        }else{
            echo "Pasajero no encontrado.\n";
        }
        break;
    case 7:
        echo "Ingrese el documento del pasajero que desea eliminar: ";
        $documento= trim(fgets(STDIN));
        $viaje->eliminarPasajero($documento);
        if ($viaje){
            echo "pasajero eliminado \n";
        } else{
            echo "error, pasajero no encontrado\n";
        }
        break;
    case 8:
        echo "Ingrese numero de empleado: ";
        $nroEmpleadoR= trim(fgets(STDIN));
        echo "Ingrese numero de licencia: ";
        $nroLicenciaR= trim(fgets(STDIN)); 
        echo "Ingrese nombre del responsable: ";
        $nombreR= trim(fgets(STDIN));
        echo "Ingrese apellido del responsable: ";
        $apellidoR= trim(fgets(STDIN));
        $objResponsable= new ResponsableV($nroEmpleadoR,$nroLicenciaR,$nombreR,$apellidoR);
        $verifica= $viaje->agregarResponsableV($objResponsable);
        if ($verifica){
          echo "Responsable añadido exitosamente.\n";
        }else{
          echo "--ERROR! Nro Empleado ya cargado.\n";
       }
       break;        
    case 9:
        echo $viaje->__toString();
        break;        
    case 10:
        echo "Saliendo...";
        exit();
    default:
        echo "Opcion invalida, intente nuevamente: ";

      
  }
}