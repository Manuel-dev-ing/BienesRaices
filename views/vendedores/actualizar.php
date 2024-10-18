
<main class="contenedor seccion">
    <h1>Actualizar Vendedor(a)</h1>
    <a href="index.php/../index" class="btnvolver">Volver</a>

            <?php foreach($errores as $error): ?>
                
                <div class="alerta error">
                    <?php echo $error ?>
                </div>
                
            <?php endforeach; ?> 
               
            <form class="formulario-crear" method="POST" action="">
                
                <fieldset>
                    <legend>Informacion General</legend>

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="nombre del vendedor" value="<?php echo sanitizar($vendedor->nombre); ?>">

                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" placeholder="apellidos del vendedor" value="<?php echo sanitizar($vendedor->apellido); ?>">

                </fieldset>

                <fieldset>
                    <legend>Informacion Extra</legend>

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" placeholder="telefono del vendedor" value="<?php echo sanitizar($vendedor->telefono); ?>">
                   
                </fieldset>

                <input type="submit" value="Guardar Cambios" class="btnenviar">
            </form>
</main>

