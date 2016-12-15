<!DOCTYPE html>

<!-- Las vistas, como su nombre nos hace entender, contienen el código de nuestra
aplicación que va a producir la visualización de las interfaces de usuario, o sea,
el código que nos permitirá renderizar los estados de nuestra aplicación en HTML.
En las vistas nada más tenemos los códigos HTML y PHP que nos permite mostrar la
salida.-->

<!-- En la vista generalmente trabajamos con los datos, sin embargo, no se realiza
un acceso directo a éstos. Las vistas requerirán los datos a los modelos y ellas
se generará la salida, tal como nuestra aplicación requiera. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso a la pagina</title>
        <link href="../css/acceso.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    </head>
    <body>
        <?php
        //
            //Este paso es para desconectar al usuario.
            session_start();
            session_destroy();
        ?>
        <h1>NOMBRE EMPRESA</h1>
        <hr>
        <section class="container">
            <div class="login">
                <h1>Login</h1>
                <form method="post" action="../controlador/login.php" method="POST">
                    <p><input type="text" name="usuario" placeholder="Ususuario"></p>
                    <p><input type="password" name="password" value="" placeholder="Password"></p>
                    <p class="submit"><input type="submit" value="Login"></p>
                </form>
            </div>
            <div class="login-Reinicio">
                <p><a href="login.php">Click here to reset it</a>.</p>
            </div>
        </section>
    </body>
</html>
