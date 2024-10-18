<div class="header-imagenContacto">

    <div class="overlay-contacto">
        <div class="contenedor contenido-imagen-contacto">
            <h2 class="text-contacto">Contacto</h2>
        </div>
    </div>
    
    <picture>
        <source srcset="/build/img/contactp.webp" type="image/webp">
        <source srcset="/build/img/contactp.jpg" type="image/jpg">
        <img loading="lazy" src="/build/img/contactp.jpg
        " alt="imagen bienes raices">
    </picture>

</div>


<main class="contenedor-contacto">
    <h2 class="headin-main">visitanos o escribenos</h2>
    <p class="parrafo-heading">Con gusto te asesoramos en la compra o venta de tu bien inmueble.</p>

    <?php if ($mensaje) { ?>
            <p class="alerta exito"> <?php echo $mensaje ?>  </p>
        <?php } ?>

    <div class="contacto">
        <section class="direccion">
            <div class="icono-contacto">
                <svg class="icono" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
           
            </div>
            <div class="informacion">
                <h3>Direccion</h3>
           
                <p>16 Juan Rincon Esquina
                    <br>
                    Ciudad de Mexico, Mx, CP 23561
                </p>
            </div>
        
        </section>

        <section class="direccion">
            <div class="icono-contacto">
                <svg class="icono" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
            </div>
            <div class="informacion">
                <h3 class="headin-telefono">Telefono</h3>
                <p class="parrafo-telefono">(836) 155 0698</p>
            </div>

        </section>

            <form class="direccion-formulario" method="POST">
                
                <label for="nombre">Tu Nombre</label>
                <input type="text" name="nombre" id="nombre" required>
                
                <label for="correo">Tu Correo Electronico</label>
                <input type="email" name="correo" id="correo" required>
                
                <label for="telefono">Tu Telefono</label>
                <input type="tel" name="telefono" id="telefono" required>   
                
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" required></textarea>

                <input type="submit" value="Enviar" class="btnenviar">

            </form>
    </div>

</main>
<section class="Contacto">
    <p>¿Quieres asesoria en la compra o venta de algun inmueble?</p>
    <button class="btnContacto">Contactanos</button>
</section>




