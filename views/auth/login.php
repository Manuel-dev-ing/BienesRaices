<main class="contenedor seccionn">
    <h1>Iniciar Sesion</h1>

    <?php foreach ($errores as $error):?>

        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>    

    <form class="direccion-formulario" method="post" action="/Login">
        <label for="correo">Tu Correo Electronico</label>
        <input type="email" name="correo" id="correo" placeholder="Tu Correo Electronico" >
        
        <label for="password">Tu Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Password" >   
        

        <input type="submit" value="Acceder" class="btnenviar">
    </form>

</main>