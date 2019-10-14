<?php
session_start();
$bddatos="phpmasterejercicio1";
$conexion= mysqli_connect("localhost", "root", "", $bddatos);
mysqli_query($conexion, "SET NAME 'UTF8'");


