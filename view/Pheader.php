<?php
    session_start();
    if(isset($_SESSION['user'])){
        $oUser = $_SESSION['user'];
    }else{
        header('Location: ../');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    
    <link rel="stylesheet" href="../css/fuentes.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/panel.js"></script>
    <link rel="stylesheet" href="../js/boostrap-table/bootstrap-table.min.css">
    <script src="../js/boostrap-table/bootstrap-table.min.js"></script>
    <script src="../js/boostrap-table/locale/bootstrap-table-es-MX.min.js"></script>
    <script src="../libs/jquery-ui/jquery-ui.js"></script>
    <link rel="stylesheet" href="../libs/jquery-ui/jquery-ui.css">
    <script src="../js/pInicio.js"></script>
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/panel.css">
    
</head>
<body>
    
<div class="admin">
    
