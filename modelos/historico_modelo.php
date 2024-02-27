<?php
require_once 'conexion.php'; // Archivo con la configuración de la conexión a la base de datos

class Historico_Modelo {
    // Función para insertar un nuevo registro en la tabla históricos
    public function insertarHistorico($tabla, $tipo, $anterior, $nuevo) {
        $conexion = Conexion::obtenerConexion(); // Obtener la conexión a la base de datos

        // Preparar la consulta SQL para insertar un nuevo registro histórico
        $consulta = $conexion->prepare("INSERT INTO historicos (tabla, tipo, anterior, nuevo) VALUES (?, ?, ?, ?)");
        $consulta->bindParam(1, $tabla);
        $consulta->bindParam(2, $tipo);
        $consulta->bindParam(3, $anterior);
        $consulta->bindParam(4, $nuevo);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            return true; // Éxito
        } else {
            return false; // Error
        }
    }

    // Otras funciones relacionadas con la tabla históricos según las consideraciones
}
?>
