<?php 
namespace Controllers;

use MVC\Router;
use Model\Vendedor;

class VendedorController{


    public static function index(Router $router){

        $vendedores = Vendedor::all();
        $resultado = $_GET['resultado'] ?? null;

        $router->render('vendedores/index', [
            'vendedores'=>$vendedores,
            'resultado'=>$resultado
        ]);

    }

    public static function crear(Router $router) {
        $errores = Vendedor::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $vendedor = new Vendedor($_POST);
        
            $errores = $vendedor->validar();
        
            if(empty($errores)){
        
                $vendedor->crear();
        
            }
        }
        $router->render('vendedores/crear', [
            'errores'=>$errores
        ]);

    }


    public static function actualizar(Router $router){
        $errores = Vendedor::getErrores();
        $id = validarOredireccionar('/vendedores/index');

        $vendedor = Vendedor::find($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
            $args = [];
            $args['nombre'] = $_POST['nombre'] ?? null;
            $args['apellido'] = $_POST['apellido'] ?? null;
            $args['telefono'] = $_POST['telefono'] ?? null;
        
            $vendedor->sincronizarActilizar($args);
        
            $errores = $vendedor->validar();
        
            
        
            if(empty($errores)){
                $vendedor->Actualizar();
            }
        
        }


        $router->render('/vendedores/actualizar', [
            'vendedor'=>$vendedor,
            'errores'=>$errores
        ]);

    }

    public static function eliminar(Router $router){


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $vendedor = Vendedor::find($id);
                $vendedor->eliminar();

            }else {
                header('Location: /vendedores/index');
            }


        }
        

    }

    
}














?>







