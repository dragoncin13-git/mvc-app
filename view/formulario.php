<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Usuario</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <h2>Registrar Usuario</h2>
  <form action="../controller/usuarioController.php" method="POST">
    <input type="hidden" name="accion" value="insertar">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Guardar</button>
  </form>
  <a href="../index.php">Volver</a>
</body>
</html>
