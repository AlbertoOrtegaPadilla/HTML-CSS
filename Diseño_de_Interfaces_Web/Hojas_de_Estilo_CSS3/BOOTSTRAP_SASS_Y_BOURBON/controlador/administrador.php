<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    //session_start();
    include '../controlador/login.php';
    // Obtiene todas las ofertas
    if($_POST){
       $submit = $_POST['submit'];
    }

    if (isset($submit)) {
          $_SESSION['submit'] = $submit;

      }
    if($_SESSION['user'] == "administrador" && $_SESSION['submit'] == "DEPARTAMENTO"){
        include '../modelo/empresa.php';
        include '../modelo/departamentos.php';
        $data['Empresa'] = Departamentos::getDepartamentos();
        include '../vista/listadoDepartamentos.php';
    }else if($_SESSION['user'] == "administrador" && $_SESSION['submit'] == "EMPLEADO"){
        include '../modelo/empresa.php';
        include '../modelo/empleados.php';
        $data['Empresa'] = Empleados::getEmpleados();
        include '../vista/listadoEmpleado.php';
    }else if($_SESSION['user'] == "administrador" && $_SESSION['submit'] == "USUARIO"){
        include '../modelo/usuarios.php';
        $data['Empresa'] = Usuario::getUsuarios();
        include '../vista/listadoUsuarios.php';
    }else if($_SESSION['user'] != "administrador" && $_SESSION['submit'] == "DEPARTAMENTO"){
        include '../modelo/empresa.php';
        include '../modelo/departamentos.php';
        $data['Empresa'] = Departamentos::getDepartamentos();
        include '../vista/listadoDepartamentoUsuario.php';
    }else if($_SESSION['user'] != "administrador" && $_SESSION['submit'] == "EMPLEADO"){
        include '../modelo/empresa.php';
        include '../modelo/empleados.php';
        $data['Empresa'] = Empleados::getEmpleados();
        include '../vista/listadoEmpleadoUsuario.php';
    }
