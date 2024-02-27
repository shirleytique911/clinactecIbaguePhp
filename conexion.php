
<?php
class Conexion {
    // Función para obtener la conexión a la base de datos
    public static function obtenerConexion() {
        $host = 'tu_host';
        $dbname = 'tu_base_de_datos';
        $username = 'tu_usuario';
        $password = 'tu_contraseña';

        try {
            $conexion = new PDO("sqlsrv:Server=$host;Database=$dbname", $username, $password);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}
?>
