<div class="header-imagen-propiedades">

    <div class="overlay-propiedades">
        <div class="contenedor contenido-imagen-propiedades">
            <h2 class="text-propiedades">Propiedades</h2>
        </div>
    </div>
    <picture>
        <source srcset="/build/img/sala.webp" type="image/webp">
        <source srcset="/build/img/sala.jpg" type="image/jpg">
        <img loading="lazy" src="build/img/sala.jpg
        " alt="imagen bienes raices">
    </picture>

</div>

<main class="contenedor">
    <h2 class="destacado">Propiedades Destacadas</h2>

    <section class="seccion-propiedades">
        <?php foreach ($propiedades as $propiedad) {?>
       
        <div class="propiedad">

            <img src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="casa en venta">
            
            <div class="ubicacion">
                <img src="/build/img/maps_icon.svg" alt="ubicacion">
                <p><?php echo $propiedad->ubicacion ?></p>
            </div>
            <div class="detalle-propiedad">
                <hr>
                <h3 class="nombre-casa"><?php echo $propiedad->titulo ?></h3>
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
                        <p><?php echo $propiedad->habitaciones;?></p>
                    </li>
                    <li>
                        <img class="bano" src="/build/img/shower-icon.svg" alt="bano">
                        <p><?php echo $propiedad->wc;?></p>
                    </li>
                </ul>
                <hr>
                <h2 class="precio-propiedad"><?php echo $propiedad->precio; ?></h2>    
            
            </div>
            <div class="ver-propiedad">
                <a href="/propiedad?id=<?php echo $propiedad->id; ?>" class="btnContacto">Ver Propiedad</a>

            </div>
        </div>
        <?php  }  ?>    

    </section>
    
</main>

<section class="Contacto">
    <p>¿Quieres asesoria en la compra o venta de algun inmueble?</p>
    <a href="/contacto" class="btnContacto">Contactanos</a>
</section>