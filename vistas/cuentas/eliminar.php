<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cuenta</title>
</head>
<body>
    <h1>Eliminar Cuenta</h1>
    <!-- Formulario para eliminar cuenta -->
    <form action="eliminar.php" method="POST">
        <!-- Campo de ID de la cuenta a eliminar -->
        <label for="id_cuenta">ID de la Cuenta:</label><br>
        <input type="text" id="id_cuenta" name="id_cuenta"><br>
        <!-- Botón de enviar -->
        <input type="submit" value="Eliminar Cuenta">
    </form>
</body>
</html>
