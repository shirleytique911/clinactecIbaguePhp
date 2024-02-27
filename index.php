<?php
// Incluir el archivo de controlador de bancos
require_once 'controladores/bancos_controller.php';

// Verificar si se ha enviado una solicitud para crear un nuevo banco
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_banco'])) {
    // Obtener el nombre del banco del formulario
    $nombreBanco = $_POST['nombre_banco'];

    // Crear una instancia del controlador de bancos
    $bancosCtrl = new Bancos_Controller();

    // Intentar crear un nuevo banco
    $resultado = $bancosCtrl->crearBanco($nombreBanco);

    // Mostrar mensaje de éxito o error
    if ($resultado) {
        echo "Banco creado exitosamente.";
    } else {
        echo "Error al crear el banco.";
    }
}
?>

