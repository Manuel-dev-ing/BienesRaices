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
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/fontawesome/css/all.css">
</head>
<body>
<header class="header">

    <h2 class="logo-header">Inmobiliaria<span>Constitucion</span> </h2>

    <nav class="contenido-nav">
        <a href="/">Inicio</a>
        <a href="/propiedades">Propiedades</a>
        <a href="/contacto">Contacto</a>
            <?php if ($auth == false): ?>
                <a href="/Login">Iniciar Sesion</a>
            <?php endif ?>
            <?php if ($auth): ?>
                <a href="/Logout">Cerrar Sesion</a>
            <?php endif ?>
    </nav>
</header>


<?php echo $contenido; ?>


<footer class="footer">

    <section class="contenedor-footer">
        <div class="div-direccion">
            <h3>Inmobiliaria Constitucion</h3>
        </div>
    
        <div class="div-propiedades">
            <p class="text-propiedades">Propiedades</p>
            <a href="#">Casas</a>
            <a href="#">Terrenos</a>
            <a href="#">Ranchos</a>
            <a href="#">Locales</a>
            <a href="#">Bodegas</a>
            
        </div>
    
        <div class="div-menu"> 
            <p class="text-menu">Menu</p>
            <a href="#">Inicio</a>
            <a href="#">Propiedades</a>
        </div>
    </section>
    

    <div class="div-copyright">
        <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
    </div>
    

</footer>
</body>
</html>







