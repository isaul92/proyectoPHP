<?php

///iniciar la sesion y la conexion a bd
//<!--  <>  <> <> <>      <>   -->

if (isset($_POST)) {
    require_once './includes/conexion.php';
    $email = trim(($_POST["email"]));
    $contraseña = trim(($_POST["pass"]));
    $sql = "select * from usuarios where email='$email'";
    //recoger datos del formulario
    $login = mysqli_query($conexion, $sql);


    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);
        //comprobar la contraseña
        var_dump($usuario);
        $verify = password_verify($contraseña, $usuario["pass"]);
        if($verify){
            ///utilizar una sesion para guardar los datos del usuario logueado
               $_SESSION["usuario"] = $usuario;
        if(isset($_SESSION["error_login"])){
            $_SESSION["error_login"]=null;
        }
               
               
        }
    } else {
   
    }
} else {
    $_SESSION["error_login"] = "login incorrecto";
}
header("Location:index.php");















//si algo falla enviar una sesion con el fallo




//redirigir al index.pgp