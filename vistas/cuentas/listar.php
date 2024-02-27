<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cuentas</title>
    <!-- Incluir aquí los estilos comunes -->
</head>
<body>
    <h1>Listado de Cuentas</h1>
    <ul>
        <?php foreach ($cuentas as $cuenta): ?>
            <li><?= $cuenta['referencia'] ?> (Banco: <?= $cuenta['nombre_banco'] ?>, Fecha: <?= $cuenta['fecha'] ?>)</li>
        <?php endforeach;
        $contenido = "<h2>Administrar Bancos</h2>";
        // Aquí podrías agregar más contenido específico de la página
        include_once("plantilla.php");
       ?>
    </ul>
    <!-- Incluir aquí el pie de página común -->
</body>
</html>
