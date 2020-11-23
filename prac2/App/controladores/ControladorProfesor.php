<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class Controladorprofesor
{
    public function guardar(String $nombre, String $idioma): void{
        $profesor = new Profesor();
        $profesor->setNombre($nombre);
        $profesor->setIdioma($idioma);
        $filas = $profesor->insertar();

        if($filas!=0){
            echo "Pofesor exitosamente guardada";
        }else{
            echo "Error: Informarcion del profesor no guardada";
        }
    }
}