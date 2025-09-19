<?php
include("../model/usuarioModel.php");
$resultado = listarUsuarios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="../estilos.css">
</head>
<body>
  <h2>Lista de Usuarios</h2>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $fila["id"]; ?></td>
        <td><?php echo $fila["nombre"]; ?></td>
        <td>
          <!-- Formulario para editar -->
          <form action="../controller/usuarioController.php" method="POST" style="display:inline;">
            <input type="hidden" name="accion" value="editar">
            <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">
            <input type="text" name="nombre" placeholder="Nuevo nombre" required>
            <button type="submit">Editar</button>
          </form>
          <!-- Botón para eliminar -->
          <a href="../controller/usuarioController.php?accion=eliminar&id=<?php echo $fila["id"]; ?>">Eliminar</a>
        </td>
      </tr>
    <?php } ?>
  </table>
  <a href="../index.php">Volver</a>
</body>
</html>
