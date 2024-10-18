<?php 

    if (!isset($_SESSION)) {
        
        session_start();

    }

    $auth = $_SESSION['login'] ?? null;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria</title>
    <link rel="stylesheet" href="/ProyectoInmobiliaria/build/css/app.css">
    <link rel="stylesheet" href="/ProyectoInmobiliaria/build/fontawesome/css/all.css">
</head>
<body>
<header class="header">

    <h2 class="logo-header">Inmobiliaria<span>Constitucion</span> </h2>

    <nav class="contenido-nav">
        <a href="/ProyectoInmobiliaria/index.php">Inicio</a>
        <a href="">Propiedades</a>
        <a href="/ProyectoInmobiliaria/contacto.php">Contacto</a>
            <?php if ($auth): ?>
                <a href="/ProyectoInmobiliaria/cerrar-sesion.php">Cerrar Sesion</a>
            <?php endif ?>
    </nav>
</header>