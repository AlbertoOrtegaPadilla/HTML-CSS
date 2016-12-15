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
        <link href="../css/listadoUsuario.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    </head>
    <body>
        <input value="MENU" name="submit" type="button" onclick="location.href = '../vista/menuListado.php';" />
                    <input id="login" value="LOGIN" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                    <div style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>CODIGO</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EDAD</th>
                            <th>SALARIO</th>
                            <th>COMISION</th>
                            <th>CODIGO DEPARTAMENTO</th>
                        </tr>  
                        <tr>
                                <form action="../controlador/agregarEmpleado.php" method="POST">
                                    <td><input type="number" name="codigo"></td>
                                    <td><input type="text" name="nombre"></td>
                                    <td><input type="text" name="apellido"></td>
                                    <td><input type="number" name="edad"></td>
                                    <td><input type="number" name="salario"></td>
                                    <td><input type="number" name="comision"></td>
                                    <td><input type="number" name="codigoDepartamento"></td>
                                    <td><input type="submit" name="accion" value="Añadir"></td>
                                </form>
                            
                        </tr>
        <?php
                    foreach($data['Empresa'] as $empleados)  {
        ?>
                        <tr>  
                            <td><b><?=$empleados->getCodigo()?></b></td>
                            <td><b><?=$empleados->getNombre()?></b></td>
                            <td><b><?=$empleados->getApellido()?></b></td>
                            <td><b><?=$empleados->getEdad()?></b></td>
                            <td><b><?=$empleados->getSalario()?></b></td>
                            <td><b><?=$empleados->getComision()?></b></td>
                            <td><b><?=$empleados->getCodigoDepartamento()?></b></td>
                            <td>
                                <form action="../vista/modificarEmpleado.php" method="POST">
                                    <input type="hidden" name="codigo" value="<?=$empleados->getCodigo()?>">
                                    <input type="hidden" name="nombre" value="<?=$empleados->getNombre()?>">
                                    <input type="hidden" name="apellido" value="<?=$empleados->getApellido()?>">
                                    <input type="hidden" name="edad" value="<?=$empleados->getEdad()?>">
                                    <input type="hidden" name="salario" value="<?=$empleados->getSalario()?>">
                                    <input type="hidden" name="comision" value="<?=$empleados->getComision()?>">
                                    <input type="hidden" name="codigoDepartamento" value="<?=$empleados->getCodigoDepartamento()?>">
                                    <input type="submit" name="accion" value="Modificar">
                                </form>
                            </td>
                        </tr>    
        <?php
                    }
        ?>       
                    </table>
                        </div>

    </body>
</html>
