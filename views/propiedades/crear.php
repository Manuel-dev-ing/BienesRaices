<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="btnvolver">Volver</a>

            <?php foreach($errores as $error): ?>
                
                <div class="alerta error">
                    <?php echo $error ?>
                </div>
                
            <?php endforeach; ?> 
               
            <form class="formulario-crear" method="POST" enctype="multipart/form-data">
                
                <fieldset>
                    <legend>Informacion General</legend>

                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" placeholder="titulo de propiedad" value="<?php echo sanitizar($propiedad->titulo); ?>">

                    <label for="ubicacion">Ubicacion</label>
                    <input type="text" name="ubicacion" id="ubicacion" placeholder="ubicacion de propiedad" value="<?php echo sanitizar($propiedad->ubicacion); ?>">
                    
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" placeholder="precio propiedad" value="<?php echo sanitizar($propiedad->precio); ?>">
                    
                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" id="imagen" accept="image/jpeg, image/png">   
                    
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" id="descripcion"><?php echo sanitizar($propiedad->descripcion); ?></textarea>

                    
                </fieldset>

                <fieldset>
                    <legend>Informacion Propiedad</legend>

                    <label for="terreno">Cantidad metros terreno</label>
                    <input type="text" name="mtsterreno" id="mtsterreno" placeholder="ej. 40mts" value="<?php echo sanitizar($propiedad->mtsterreno); ?>">

                    <label for="casa">Cantidad metros casa</label>
                    <input type="text" name="mtscasa" id="mtscasa" placeholder="ej. 35mts" value="<?php echo sanitizar($propiedad->mtscasa); ?>" >

                    <label for="habitaciones">Habitaciones:</label>
                    <input type="number" name="habitaciones" id="habitaciones" min="1" max="9" placeholder="ej. 3" value="<?php echo sanitizar($propiedad->habitaciones); ?>">

                    <label for="wc">Baños:</label>
                    <input type="number" name="wc" id="wc" min="1" max="9" placeholder="ej. 3" value="<?php echo sanitizar($propiedad->wc);?>">

                    <label for="estacionamiento">Estacionamiento:</label>
                    <input type="number" name="estacionamiento" id="estacionamiento" min="1" max="9" placeholder="ej. 2" value="<?php echo sanitizar($propiedad->estacionamiento); ?>">


                </fieldset>

                <fieldset>
                    <legend>Vendedor</legend>
                    <label for="vendedor"></label>
                    <select name="vendedores_id" id="vendedor">
                        <option selected value="">-- Seleccione una Opcion --</option>
                        <?php foreach ($vendedores as $vendedor) { ?>
                        
                            <option <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?>
                            value="<?php echo sanitizar($vendedor->id) ?>"> <?php echo sanitizar($vendedor->nombre) . " ". sanitizar($vendedor->apellido); ?></option>
                        
                        <?php }?>

                     
                    </select>
                </fieldset>

                <input type="submit" value="Crear Propiedad" class="btnenviar">
            </form>
        


</main>

