<?php 

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use Model\Vendedor;

class PropiedadController{

    public static function index(Router $router){
        
        $propiedades = Propiedad::all();

        $resultado = $_GET['resultado'] ?? null;

        $router->render('/propiedades/admin', [
            'propiedades' => $propiedades,
            'resultado' => $resultado
        ]);


    }

    public static function crear(Router $router){
        $errores = Propiedad::getErrores();

        $propiedad = new Propiedad();
        $vendedores = Vendedor::all();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
         

            $propiedad = new Propiedad($_POST);

            $imagen = $_FILES['imagen'];
            $nombreImagen = md5( uniqid( rand(), true )) . ".jpg";
    
            if ($_FILES['imagen']['tmp_name']) {
    
                $propiedad->setImagen($nombreImagen);
                
            }
    
            $errores = $propiedad->validar();
            //debuguear($propiedad);
    
            if(empty($errores)){
                
                // debuguear(CARPETA_IMAGENES   );
            
                $carpetaImagenes = $_SERVER['DOCUMENT_ROOT'] . '/' .'imagenes/';
               
                if (!is_dir($carpetaImagenes)) {
                    mkdir($carpetaImagenes);
                }
    
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
                
                $resultado = $propiedad->crear();
    
                if ($resultado) {
                    header('Location: ../?resultado=1');
                }
            }
        }


        $router->render('propiedades/crear', [
            'errores'=>$errores,
            'propiedad'=>$propiedad,
            'vendedores'=>$vendedores
        ]);
    }

    public static function actualizar(Router $router){
       
        $id = validarOredireccionar('/admin');

        $propiedad = Propiedad::find($id);
        $vendedores = Vendedor::all();
        // debuguear($propiedad);
        $errores = Propiedad::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $args = [];
            $args['titulo'] = $_POST['titulo'] ?? null;
            $args['ubicacion'] = $_POST['ubicacion'] ?? null;
            $args['precio'] = $_POST['precio'] ?? null;
            $args['imagen'] = $_POST['imagen'] ?? null;
            $args['descripcion'] = $_POST['descripcion'] ?? null;
            $args['mtsterreno'] = $_POST['mtsterreno'] ?? null;
            $args['mtscasa'] = $_POST['mtscasa'] ?? null;
            $args['habitaciones'] = $_POST['habitaciones'] ?? null;
            $args['wc'] = $_POST['wc'] ?? null;
            $args['estacionamiento'] = $_POST['estacionamiento'] ?? null;
            $args['vendedores_id'] = $_POST['vendedores_id'] ?? null;

            $propiedad->sincronizarActilizar($args);
          
            $errores = $propiedad->validar();

            $imagen = $_FILES['imagen'];

            $nombreImagen = md5( uniqid( rand(), true )) . ".jpg";

            if ($_FILES['imagen']['tmp_name']) {

                $propiedad->setImagen($nombreImagen);

            }
            
            if(empty($errores)){

                $carpetaImagenes = $_SERVER['DOCUMENT_ROOT'] . '/' .'imagenes/';

                if (!is_dir($carpetaImagenes)) {
                    mkdir($carpetaImagenes);
                }
                if ($_FILES['imagen']['tmp_name']) {
                    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

                }
                
                $propiedad->Actualizar();

            }

            

        }


        $router->render('propiedades/actualizar', [
            'propiedad' => $propiedad,
            'errores'=>$errores,
            'vendedores'=>$vendedores
        ]);

    }


    public static function eliminar(){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            $id = filter_var($id, FILTER_VALIDATE_INT);
            
            if ($id) {
                $propiedad = Propiedad::find($id);
    
                $propiedad->eliminar();  
            }
        
        }
    
    }

}













?>