<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Bancos y Cuentas</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Vincular archivo de estilos -->
</head>
<body>
    <header>
        <h1>Administración de Bancos y Cuentas</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="bancos.php">Administrar Bancos</a></li>
            <li><a href="cuentas.php">Administrar Cuentas</a></li>
            <li><a href="historicos.php">Historial de Operaciones</a></li>
        </ul>
    </nav>
    <main>
        <!-- Contenido de las páginas -->
        <?php echo $contenido; ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Tu Empresa</p>
    </footer>
</body>
</html>
