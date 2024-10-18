<main class="contenedor seccion">
    <h1>Administrador Bienes Raices - Vendedores</h1>
    <?php if (intval($resultado) === 1): ?>
            <p class="alerta exito">Creado Correctamente</p>
        <?php elseif (intval($resultado) === 2): ?>        
            <p class="alerta exito">Actualizada Correctamente</p>
        <?php elseif (intval($resultado) === 3): ?>        
            <p class="eliminado">Eliminada Correctamente</p>
    <?php endif; ?>    
            
    <a href="/admin" class="btnNuevaPropiedad">Ver Propiedades</a>
    <a href="/vendedores/crear" class="btnNuevaPropiedad">Nuevo(a) Vendedor</a>
    
    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendedores as $vendedor): ?>
            <tr>
                <td><?php echo $vendedor->id; ?></td>
                <td><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                <td><?php echo $vendedor->telefono; ?></td>
                <td>
                    <form method="post" class="formbtnEliminar" action="index.php/../eliminar">
                        <input type="hidden" name="id" value="<?php echo $vendedor->id;?>">

                        <input type="submit" class="btnEliminar" value="Eliminar">

                    </form>

                    <a href="index.php/../actualizar?id=<?php echo $vendedor->id; ?>" class="btnActualizar">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    

</main>



