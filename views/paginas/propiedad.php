<div class="header-imagenContacto">

    <div class="overlay-contacto">
        <div class="contenedor contenido-imagen-contacto">
            <h2 class="header-text-propiedad">Detalles de la Propiedad</h2>
        </div>
    </div>
    
    <picture>
        <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen; ?>
        " alt="imagen bienes raices">
    </picture>

</div>


<main class="contenedor-main">
    

    <section class="seccion-propiedad">

        <div class="div-imagen">
            <img class="propiedad-imagen" loading="lazy" src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="imagen de la propiedad">      
        </div>
        <div class="resumen-propiedad">
            <h1 class="titulo"><?php echo $propiedad->titulo; ?></h1>

            <div class="ubicacion">
                <img src="/build/img/maps_icon.svg" alt="ubicacion">
                <p><?php echo $propiedad->ubicacion ?> </p>
            </div>
            <hr>
            <h3 class="precio-resumen-propiedad">$<?php echo number_format($propiedad->precio, 2, null, ','); ?></h2>
            <hr>
            <ul class="caracteristicas-propiedad">
                <li>
                    <img src="/build/img/square-icon.svg" alt="Terreno">
                    <p><?php echo $propiedad->mtsterreno;?></p>
                </li>
                <li>
                    <img src="/build/img/home-icon.svg" alt="casa">
                    <p><?php echo $propiedad->mtscasa;?></p>
                </li>
                <li>
                    <img src="/build/img/recamara_icon.svg" alt="recamara">
                    <p><?php echo $propiedad->habitaciones;?> Recamaras</p>
                </li>
                <li>
                    <img class="bano" src="/build/img/shower-icon.svg" alt="bano">
                    <p><?php echo $propiedad->wc;?> Baños</p>
                </li>
            </ul>
        
        </div>

        

    </section>

    <section class="seccion-descripcion">
        <h2 class="titulo-descripcion">Descripcion</h2>
        <p class="descripcion"><?php echo $propiedad->descripcion; ?></p>
        
    </section>
    
   

    
</main>