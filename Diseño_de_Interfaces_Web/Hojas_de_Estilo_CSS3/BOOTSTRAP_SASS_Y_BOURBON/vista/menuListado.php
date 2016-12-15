<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/menuListado.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <title>MENU</title>
    </head>
    <body>
        <?php
            require_once '../Modelo/usuarios.php';
            $data['Empresa'] = Usuario::getUsuarios();
            foreach($data['Empresa'] as $usuarios)  {
                if($_SESSION['user'] == "administrador" && $_SESSION['user'] == $usuarios->getUsuario()
                    && $_SESSION['password'] == $usuarios->getPassword()){
        ?>
                <input value="LOGIN" class="btn btn-warning" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br><br>
                <div>
                    <div><h1>NOMBRE EMPRESA</h1></div><br><br>
                       <div >

                         <form action="../controlador/administrador.php" method="POST">
                         <div class="row">
                           <div class="col-md-4">
                               <div class="panel panel-default">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">Listado Empleado:</h3>
                                   </div>
                                   <div class="panel-body">
                                       <br><br>
                                        <img src="../img/Empleados.png" alt="..." class="img-rounded img-responsive center-block">
                                        <br><br><br>
                                        <input class="btn btn-primary form-control" value="EMPLEADO" name="submit" type="submit"/>
                                   </div>
                                </div>
                           </div>
                           <div class="col-md-4">
                                <div class="panel panel-default">
                                   <div class="panel-heading">
                                        <h3 class="panel-title">Listado Departamento:</h3>
                                    </div>
                                   <div class="panel-body">
                                       <br><br>
                                        <img src="../img/departamentos.png" alt="..." class="img-rounded img-responsive center-block">
                                        <br><br><br>
                                        <input class="btn btn-primary form-control" value="DEPARTAMENTO" name="submit" type="submit"/>
                                   </div>
                                </div>
                           </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listado Usuario:</h3>
                                    </div>
                                    <div class="panel-body">
                                        <br><br>
                                        <img src="../img/usuarios.png" alt="..." class="img-rounded img-responsive center-block">
                                        <br><br><br>
                                        <input class="btn btn-primary form-control" value="USUARIO" name="submit" type="submit" />
                                    </div>
                                </div>
                            </div>
                            <br>
                         </form>
                       </div>
                </div>
        <?php
                    }else if ($_SESSION['user'] != "administrador" && $_SESSION['user'] == $usuarios->getUsuario()
                        && $_SESSION['password'] == $usuarios->getPassword()){

        ?>
                        <input value="LOGIN" class="login" name="submit" type="button" onclick="location.href = '../vista/login.php';" /><br>
                            <div><h1>NOMBRE EMPRESA</h1></div><br><br>
                            <section class="container">
                            <form action="../controlador/administrador.php" method="POST">
                                <div class="containerFlex">
                                        <div class="">
                                             <input class="empleado" value="EMPLEADO" name="submit" type="submit"/>
                                        </div>
                                        <div class="">
                                             <input class="departamento" value="DEPARTAMENTO" name="submit" type="submit"/>
                                        </div>
                                </div>
                            </form>
                            </section>
                            <div class="center">
                            <ul id="galeria">
                                <li><span id="img1"></span></li>
                                <li><span id="img2"></span></li>
                                <li><span id="img3"></span></li>
                                <li><span id="img4"></span></li>
                            </ul>
                          </div>

                        </div>
        <?php
                    }
            }
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
