<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/modificacion.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            
            if(isset($codigo)){
                $_SESSION['codigo'] = $codigo;
                $_SESSION['nombre'] = $nombre;
            }
        ?>
        <input value="MENU" name="submit" id="menu" type="button" onclick="location.href = 'menuListado.php';" />
        <input value="LISTADO USUARIO" id="listado" name="submit" type="button" onclick="location.href = '../controlador/administrador.php';" />
        <input value="LOGIN" name="submit" id="login" type="button" onclick="location.href = 'login.php';" /><br><br>
            
         <section class="container">
            <div class="login">
                <h1>Modificacion Departamento</h1>
                <form action="../controlador/modificarDepartamento.php" method="post">
                    <label>ID:</label>
                    <input id="disable" class="form-control" type="text" name="codigo" value="<?=$_SESSION['codigo']?>" readonly="readonly">
                    <label>NOMBRE:</label>
                    <input class="form-control" type="text" name="nombre" value="<?=$_SESSION['nombre']?>">
                    <p><input type="submit" value="Submit"></p>
                 </form>
            </div>
         </section>
    </body>
</html>
