<?php
namespace App\Clases;
use Includes\ConexionBD as Conexion;

class Usuario{
    private $id;
    private $nombre;
    private $email;

    public function mostrarPorCodigo($email)
    {
        try {
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM estudiante WHERE email=$email";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //$resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $stmt;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function insertar(int $id_estudiante, String $nombre, String $email){
        try{
            $conexionDB = new Conexion();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO estudiante(id_estudiante, nombre, email)
                    VALUES(?, ?, ?)";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(1, $id_estudiante, \PDO::PARAM_INT);
            $stmt->bindParam(2, $nombre, \PDO::PARAM_STR);
            $stmt->bindParam(3, $email, \PDO::PARAM_STR);
            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
