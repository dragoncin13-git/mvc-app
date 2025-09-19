<?php
include("../model/usuarioModel.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["accion"]) && $_POST["accion"] === "insertar") {
        insertarUsuario($_POST["nombre"]);
        header("Location: ../view/lista.php");
    }

    if (isset($_POST["accion"]) && $_POST["accion"] === "editar") {
        actualizarUsuario($_POST["id"], $_POST["nombre"]);
        header("Location: ../view/lista.php");
    }
}

if (isset($_GET["accion"]) && $_GET["accion"] === "eliminar") {
    eliminarUsuario($_GET["id"]);
    header("Location: ../view/lista.php");
}
?>
