<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once '../Modelo/usuarios.php';
    $usuarioAux = new Usuario($_POST['id']);
    $usuarioAux->delete();
    header("Location: http://localhost/TrabajoPHP/controlador/administrador.php");
