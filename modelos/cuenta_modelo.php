<?php
require_once 'conexion.php'; // Archivo con la configuración de la conexión a la base de datos

class Cuenta_Modelo {
    // Función para crear una nueva cuenta
    public function crearCuenta($idBanco, $referencia, $fecha) {
        $conexion = Conexion::obtenerConexion(); // Obtener la conexión a la base de datos

        // Preparar la consulta SQL para insertar una nueva cuenta
        $consulta = $conexion->prepare("INSERT INTO cuentas (id_banco, referencia, fecha) VALUES (?, ?, ?)");
        $consulta->bindParam(1, $idBanco);
        $consulta->bindParam(2, $referencia);
        $consulta->bindParam(3, $fecha);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            return true; // Éxito
        } else {
            return false; // Error
        }
    }

    // Función para listar todas las cuentas
    public function listarCuentas() {
        $conexion = Conexion::obtenerConexion(); // Obtener la conexión a la base de datos

        // Preparar la consulta SQL para listar todas las cuentas
        $consulta = $conexion->prepare("SELECT c.*, b.nombre AS nombre_banco FROM cuentas c INNER JOIN bancos b ON c.id_banco = b.id");
        $consulta->execute();

        // Obtener los resultados de la consulta
        $cuentas = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $cuentas;
    }

    // Otras funciones para actualizar y eliminar cuentas según las consideraciones
}
?>
