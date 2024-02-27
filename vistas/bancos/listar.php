<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Bancos</title>
    <!-- Incluir aquí los estilos comunes -->
</head>
<body>
    <h1>Listado de Bancos</h1>
    <ul>
        <?php foreach ($bancos as $banco): ?>
            <li><?= $banco['nombre'] ?></li>
        <?php endforeach;
        $contenido = "<h2>Administrar Bancos</h2>";
        // Aquí podrías agregar más contenido específico de la página
        include_once("plantilla.php");
       ?>
    </ul>
    <!-- Incluir aquí el pie de página común -->
</body>
</html>
