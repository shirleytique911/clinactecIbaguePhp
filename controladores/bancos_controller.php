<?php
require_once 'banco_modelo.php'; // Incluir el modelo de bancos
require_once 'historicos_controller.php'; // Incluir el controlador de históricos

class Bancos_Controller {
    // Función para crear un nuevo banco
    public function crearBanco($nombre) {
        // Validar datos
        if (empty($nombre)) {
            $_SESSION['mensaje'] = "Error: El nombre del banco es obligatorio.";
            return false;
        }

        // Crear banco
        $modelo = new Banco_Modelo();
        $resultado = $modelo->crearBanco($nombre);

        // Verificar resultado y mostrar mensaje
        if ($resultado) {
            $_SESSION['mensaje'] = "Banco creado exitosamente.";
            // Registrar en Históricos
            $historicosCtrl = new Historicos_Controller();
            $historicosCtrl->registrarHistorico("bancos", "crear", "", "Nombre: $nombre");
        } else {
            $_SESSION['mensaje'] = "Error al crear el banco.";
        }

        return $resultado;
    }

    // Función para listar todos los bancos
    public function listarBancos() {
        $modelo = new Banco_Modelo();
        return $modelo->listarBancos();
    }

    // Otras funciones para actualizar y eliminar bancos según las consideraciones
}
?>
