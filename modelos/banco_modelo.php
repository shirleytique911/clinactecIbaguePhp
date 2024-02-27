<?php
require_once 'conexion.php'; // Archivo con la configuración de la conexión a la base de datos

class Banco_Modelo {
    // Función para crear un nuevo banco
    public function crearBanco($nombre) {
        $conexion = Conexion::obtenerConexion(); // Obtener la conexión a la base de datos

        // Preparar la consulta SQL para insertar un nuevo banco
        $consulta = $conexion->prepare("INSERT INTO bancos (nombre) VALUES (?)");
        $consulta->bindParam(1, $nombre);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            return true; // Éxito
        } else {
            return false; // Error
        }
    }

    // Función para listar todos los bancos
    public function listarBancos() {
        $conexion = Conexion::obtenerConexion(); // Obtener la conexión a la base de datos

        // Preparar la consulta SQL para listar todos los bancos
        $consulta = $conexion->prepare("SELECT * FROM bancos");
        $consulta->execute();

        // Obtener los resultados de la consulta
        $bancos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $bancos;
    }

    // Otras funciones para actualizar y eliminar bancos según las consideraciones
}
?>
