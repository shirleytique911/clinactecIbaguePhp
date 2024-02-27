<?php
require_once 'historico_modelo.php'; // Incluir el modelo de históricos

class Historicos_Controller {
    // Función para insertar un nuevo registro en la tabla históricos
    public function insertarHistorico($tabla, $tipo, $anterior, $nuevo) {
        // Insertar registro en la tabla históricos
        $modelo = new Historico_Modelo();
        $resultado = $modelo->insertarHistorico($tabla, $tipo, $anterior, $nuevo);

        // Verificar resultado y mostrar mensaje
        if ($resultado) {
            $_SESSION['mensaje'] = "Registro histórico insertado exitosamente.";
        } else {
            $_SESSION['mensaje'] = "Error al insertar el registro histórico.";
        }

        return $resultado;
    }

    // Otras funciones relacionadas con la tabla históricos según las consideraciones
}
?>
