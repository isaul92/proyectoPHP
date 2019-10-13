<?php
session_start();
$conexion= mysqli_connect("localhost", "root", "", "phpmasterejercicio1");
mysqli_query($conexion, "SET NAME 'UTF8'");


