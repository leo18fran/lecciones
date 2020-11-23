<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class Controladorestudiante
{
    public function guardar(String $nombre, String $email): void{
        $estudiante = new Estudiante();
        $estudiante->setNombre($nombre);
        $estudiante->setEmail($email);
        $filas = $estudiante->insertar();

        if($filas!=0){
            echo "alumno exitosamente guardada";
        }else{
            echo "Error: Informarcion del alumno no guardada";
        }
    }
}