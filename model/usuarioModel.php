<?php
include("conexion.php");

function insertarUsuario($nombre) {
    global $conexion;
    $nombre = htmlspecialchars($nombre);
    $query = "INSERT INTO usuarios(nombre) VALUES('$nombre')";
    return mysqli_query($conexion, $query);
}

function listarUsuarios() {
    global $conexion;
    $query = "SELECT * FROM usuarios";
    return mysqli_query($conexion, $query);
}

function eliminarUsuario($id) {
    global $conexion;
    $query = "DELETE FROM usuarios WHERE id=$id";
    return mysqli_query($conexion, $query);
}

function actualizarUsuario($id, $nombre) {
    global $conexion;
    $nombre = htmlspecialchars($nombre);
    $query = "UPDATE usuarios SET nombre='$nombre' WHERE id=$id";
    return mysqli_query($conexion, $query);
}
?>
