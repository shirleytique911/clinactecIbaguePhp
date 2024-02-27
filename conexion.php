<?php
$serverName = "DESKTOP-5NBDCE1"; // Nombre del servidor\instancia
$databaseName = "Borrar"; // Nombre de la base de datos
$username = 'sa'; // Nombre de usuario de la base de datos
$password = 'thomas1709'; // Contraseña de la base de datos

try {
    // Establecer la conexión utilizando sqlsrv_connect
    $conn = sqlsrv_connect($serverName, array(
        "Database" => $databaseName,
        "UID" => $username,
        "PWD" => $password
    ));

    // Verificar si la conexión se estableció correctamente
    if ($conn) {
        echo "Conexión establecida.<br />";
    } else {
        echo "Conexión no se pudo establecer.<br />";
        die(print_r(sqlsrv_errors(), true));
    }
} catch (PDOException $exp) {
    echo "Error de conexión con la base de datos: $databaseName, error: $exp";
}
?>


