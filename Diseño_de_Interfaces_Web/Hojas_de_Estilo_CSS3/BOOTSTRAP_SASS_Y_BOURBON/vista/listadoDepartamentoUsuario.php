<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/listadoUsuario.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <title></title>
    </head>
    <body>
                    <input value="MENU" name="submit" type="button" onclick="location.href = '../vista/menuListado.php';" />
                    <input id="login" value="LOGIN" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                    <div style="overflow-x:auto;">
                    <table>
                            <tr>
                                <th>CODIGO</th>
                                <th>NOMBRE  DEPARTAMENTO</th>
                            </tr> 
                            <tr>
                                    <form action="../controlador/agregarDepartamento.php" method="POST">
                                        <td><input type="number" name="codigo"></td>
                                        <td><input type="text" name="nombre"><br></td>
                                        <td><input type="submit" name="accion" value="Añadir"></td>
                                    </form>

                            </tr>
        <?php
                    foreach($data['Empresa'] as $departamentos)  {
        ?>
                        
                            <tr>  
                                <td><b><?=$departamentos->getCodigo()?></b></td>
                                <td><b><?=$departamentos->getNombre()?></b></td>
                                <td>
                                    <form action="../vista/modificarDepartamento.php" method="POST">
                                        <input type="hidden" name="codigo" value="<?=$departamentos->getCodigo()?>">
                                        <input type="hidden" name="nombre" value="<?=$departamentos->getNombre()?>">
                                        <input type="submit" name="accion" value="Modificar">
                                    </form>
                                </td>
                                <td>
                                    <form action="../controlador/borrarDepartamento.php" method="POST">
                                        <input type="hidden" name="codigo" value="<?=$departamentos->getCodigo()?>">
                                        <input type="submit" name="accion" value="Borrar">
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
