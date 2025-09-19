<?php
$conexion = mysqli_connect("localhost", "root", "", "web2");

if (mysqli_connect_errno()) {
    echo "Error de conexión: " . mysqli_connect_error();
    exit();
}
?>
