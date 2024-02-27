<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Historicos</title>
    <!-- Incluir aquí los estilos comunes -->
</head>
<body>
    <h1>Listado de Historicos</h1>
    <ul>
        <?php foreach ($historicos as $historico): ?>
            <li><?= $historico['tipo'] ?> (Tabla: <?= $historico['tabla'] ?>, Anterior: <?= $historico['anterior'] ?>, Nuevo: <?= $historico['nuevo'] ?>)</li>
        <?php endforeach;
       
        $contenido = "<h2>Administrar Bancos</h2>";
        // Aquí podrías agregar más contenido específico de la página
        include_once("plantilla.php");
      
         ?>
    </ul>
    <!-- Incluir aquí el pie de página común -->
</body>
</html>
