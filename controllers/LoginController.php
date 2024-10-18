<?php

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginController
{

    public static function Login(Router $router){
        
        $errores = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
            $auth = new Admin($_POST);
            $errores = $auth->validar();
        
            if (empty($errores)) {
                
                $resultado = $auth->existeUsuario();

                if (!$resultado) {
                    $errores = Admin::getErrores();
                }else{
                    $resultado = $auth->comprobarPassword($resultado);

                    if ($resultado) {
                        
                        $auth->autenticar();

                    }else{
                        $errores = Admin::getErrores();

                    }

                }


            }    


        }


        $router->render('auth/login' ,[
            'errores'=>$errores
        ]);

    }

    public static function Logout(){

        session_start();

        $_SESSION = [];


        header("Location: /");
    }

    
}












?>