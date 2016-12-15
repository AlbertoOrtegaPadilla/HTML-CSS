<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/modificacion.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
            $codigo = $_POST['codigo'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $salario = $_POST['salario'];
            $comision = $_POST['comision'];
            $codigoDepertamento = $_POST['codigoDepartamento'];
            
            if (isset($codigo)) {
               $_SESSION['codigo'] = $codigo;
               $_SESSION['nombre'] = $nombre;
               $_SESSION['apellido'] = $apellido;
               $_SESSION['edad'] = $edad;
               $_SESSION['salario'] = $salario;
               $_SESSION['comision'] = $comision;
               $_SESSION['codigoDepartamento'] = $codigoDepertamento;
            }
            
          ?>
        <input value="MENU" name="submit" id="menu" type="button" onclick="location.href = 'menuListado.php';" />
        <input value="LISTADO EMPLEADO" id="listado" name="submit" type="button" onclick="location.href = '../controlador/administrador.php';" />
        <input value="LOGIN" name="submit" id="login" type="button" onclick="location.href = 'login.php';" /><br><br>
                
        <section class="container">
            <div class="login">
                <h1>Modificacion Empleado</h1>
                <form action="../controlador/modificarEmpleado.php" method="post">
                      <label>CODIGO:</label>
                      <input id="disable" input type="text" name="codigo" value="<?=$_SESSION['codigo']?>" readonly="readonly">
                      <label>NOMBRE:</label>
                      <input type="text" name="nombre" value="<?=$_SESSION['nombre']?>">
                      <label>APELLIDO:</label>
                      <input type="text" name="apellido" value="<?=$_SESSION['apellido']?>">
                      <label>EDAD:</label>
                      <input type="number" name="edad" value="<?=$_SESSION['edad']?>">
                      <label>SALARIO:</label>
                      <input <input type="number" name="salario" value="<?=$_SESSION['salario']?>">
                      <label>COMISION:</label>
                      <input type="number" name="comision" value="<?=$_SESSION['comision']?>">
                      <label>CODIGO DEPARTAMENTO:</label>
                      <input type="number" name="codigoDepartamento" value="<?=$_SESSION['codigoDepartamento']?>">
                      <p><input type="submit" value="Submit"></p>
                  </form>
            </div>
        </section>
    </body>
</html>
