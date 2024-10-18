<?php

// debuguear($propiedades);
?>    
<main class="contenedor seccion">
<h1>Administrador Bienes Raices</h1>

        <?php 
       if (intval($resultado) === 1): ?>
            <p class="alerta exito">Creada Correctamente</p>

            <?php elseif (intval($resultado) === 2): ?>  

                <p class="alerta exito">Actualizada Correctamente</p>
        
            <?php elseif (intval($resultado) === 3): ?>        
           
                <p class="eliminado">Eliminado Correctamente</p>
        
        <?php endif; ?> 
      
        
<div class="botones-menu">
    <a href="/propiedades/crear" class="btnNuevaPropiedad">Nueva Propiedad</a>
     
    <a href="/vendedores/index" class="btnNuevaPropiedad">Ver Vendedores</a>
    
</div>

<table class="propiedades">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Ubicacion</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($propiedades as $propiedad): ?>
        <tr>
            <td><?php echo $propiedad->id; ?></td>
            <td><?php echo $propiedad->titulo; ?></td>
            <td><?php echo $propiedad->ubicacion; ?></td>
            <td>$<?php echo $propiedad->precio; ?></td>
            <td>
                <form method="post" class="formbtnEliminar" action="/propiedades/eliminar">
                    <input type="hidden" name="id" value="<?php echo $propiedad->id;?>">

                    <input type="submit" class="btnEliminar" value="Eliminar">

                </form>

                <a href="/propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="btnActualizar">Actualizar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>    

</main>










