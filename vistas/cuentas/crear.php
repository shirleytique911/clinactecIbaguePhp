<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <!-- Incluir aquí los estilos comunes -->
</head>
<body>
    <h1>Crear Cuenta</h1>
    <form action="guardar_cuenta.php" method="POST">
        <label for="banco">Banco:</label>
        <select name="banco" required>
            <?php foreach ($bancos as $banco): ?>
                <option value="<?= $banco['id'] ?>"><?= $banco['nombre'] ?></option>
            <?php endforeach; ?>
        </select>
        <label for="referencia">Referencia:</label>
        <input type="text" name="referencia" required>
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required>
        <button type="submit">Guardar</button>
    </form>
    <!-- Incluir aquí el pie de página común -->
</body>
</html>
