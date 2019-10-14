

<!--   BARRA LATERAL  <>    -->
<div id="contenedor">
    <aside id="aside">

        <?php if (isset($_SESSION["usuario"])): ?>
            <div id="usuario-logeado" class="block-aside">

                <h3>
                    <?= $_SESSION["usuario"]["nombre"] . " " . $_SESSION["usuario"]["apellido"] ?>
                </h3>

            </div>




        <?php endif; ?>



        <div id="login" class="block-aside">
            <h3>Identificate</h3>
            <form action="login.php" method="POST">
                <label>Email</label>
                <input type="email" name="email" placeholder="Ingrese email">
                <label>Contraseña</label>
                <input type="password" name="pass" required="required" placeholder="Ingrese contraseña">

                <input type="submit"  required="required "value="Acceder">
            </form>
        </div>

        <div id="login" class="block-aside">
            <h3>Registrate</h3>


            <?php
            include 'includes/helpers.php';
            if (isset($_SESSION["errores"])) {


                //       var_dump($_SESSION["errores"]);
            }

            if (isset($_SESSION["completado"])) {
                echo "<div class='alerta alertaexito'>" . $_SESSION["completado"] . "</div>";
            } else if (isset($_SESSION["errores"]["general"])) {
                echo "<div class='alerta'>" . $_SESSION["errores"]["general"] . "</div>";
            }
            ?>
            <form action="registrar.php" method="POST">

                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese su nombre">                          
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "nombre") : ""; ?>
                <label>Apellidos</label>
                <input type="text" name="apellidos" placeholder="Ingrese sus apllidos">
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "apellidos") : ""; ?>
                <label>Email</label>
                <input type="email" name="email" placeholder="Ingrese email">
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "email") : ""; ?>
                <label>Contraseña</label>
                <input type="password" name="pass"  placeholder="Ingrese contraseña">
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "pass") : ""; ?>
                <input type="submit"  required="required" name="submit" value="Registrar">
            </form>
            <?php borrarErrores(); ?>
        </div>
    </aside>
