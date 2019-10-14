<?php require_once './includes/conexion.php'; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.<>
-->
<html>



    <head >
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./assets/css/style.css">
        <title>BLOG DE VIDEOJUEGOS</title>


    </head>


    <body>

        <?php
        require_once './includes/header.php';
        ?>

        <?php
        require_once './includes/aside.php';
        ?>
        <div id="principal">

            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <a href="">
                    <h2>Titulo entrada </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo entrada </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </a>
            </article>
            <article class="entrada">
                <a href="">
                    <h2>Titulo entrada </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </a>
            </article>


            <div id="ver-todas">
                <a href="">Ver todas las entradas</a>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>



    <?php
    require_once './includes/footer.php';
    ?>





</body>  



</html>
