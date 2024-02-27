<?php
require_once 'cuenta_modelo.php'; // Incluir el modelo de cuentas
require_once 'historicos_controller.php'; // Incluir el controlador de históricos

class Cuentas_Controller {
    // Función para crear una nueva cuenta
    public function crearCuenta($idBanco, $referencia, $fecha) {
        // Validar datos
        if (empty($idBanco) || empty($referencia) || empty($fecha)) {
            // Manejar error de datos inválidos
            $_SESSION['mensaje'] = "Error: Todos los campos son obligatorios.";
            return false;
        }

        // Crear cuenta
        $modelo = new Cuenta_Modelo();
        $resultado = $modelo->crearCuenta($idBanco, $referencia, $fecha);

        // Verificar resultado y mostrar mensaje
        if ($resultado) {
            $nombreBanco = obtenerNombreBanco($idBanco); // Función para obtener el nombre del banco
            $_SESSION['mensaje'] = "Cuenta creada exitosamente.";
        } else {
            $_SESSION['mensaje'] = "Error al crear la cuenta.";
        }

        // Registrar en Históricos
        if ($resultado) {
            $historicosCtrl = new Historicos_Controller();
            $historicosCtrl->registrarHistorico("cuentas", "crear", "", "Banco: $nombreBanco, Referencia: $referencia, Fecha: $fecha");
        }

        return $resultado;
    }

    // Función para listar todas las cuentas
    public function listarCuentas() {
        $modelo = new Cuenta_Modelo();
        return $modelo->listarCuentas();
    }

    // Otras funciones para actualizar y eliminar cuentas según las consideraciones
}
?>
