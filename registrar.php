<?php

session_start();
var_dump($_POST);
$errores = array();
if (!empty($_POST)) {
    $nombre = !empty($_POST["nombre"]) ? $_POST["nombre"] : FALSE;
    $apellidos = !empty($_POST["apellidos"]) ? $_POST["apellidos"] : FALSE;
    $email = !empty($_POST["email"]) ? $_POST["email"] : FALSE;
    $contraseña = !empty($_POST["pass"]) ? $_POST["pass"] : FALSE;


    //validar los daros antes de guardarlos
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombreValidado = true;
    } else {
        $nombreValidado = FALSE;
        echo 'El nombre  no es valido';
        $errores["nombre"] = "el nombre no es valido";
    }
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidosValidado = true;
    } else {
        $apellidosValidado = false;
        echo 'Los apellidos no son validos';
        $errores["apellidos"] = "los apellidos no son validos";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailvalidado = true;
    } else {
        $emailvalidado = false;
        $errores["email"] = "el email no es valido";
        echo 'El email no es valido';
    }

    if (!empty($contraseña)) {
        $contavalidado = true;
    } else {

        $contavalidado = false;
        $errores["contraseña"] = "la contraseña no es valida";
        //echo "la contraseña esta vacia";
    }

    if (count($errores) == 0) {
        $cguardarUsuario = true;
    } else {
        $_SESSION["errores"] = $errores;
        header("Location:index.php");
    }
} 