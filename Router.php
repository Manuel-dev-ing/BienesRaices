<?php

namespace MVC;

class Router
{
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn){

        $this->rutasGET[$url] = $fn;

    }

    public function post($url, $fn){

        $this->rutasPOST[$url] = $fn;

    }

    public function comprobarRutas(){
        session_start();
        $auth = $_SESSION['login'] ?? null;

        $rutas_protegidas = ['/admin', '/propiedades/crear', '/propiedades/actualizar', '/propiedades/eliminar', '/vendedores/index', '/vendedores/actualizar', '/vendedores/crear', '/vendedores/eliminar'];        

        $urlActual = strtok($_SERVER['REQUEST_URI'], '?')  ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        
        // debuguear($urlActual);

        if ($method === 'GET') {
            $funcion = $this->rutasGET[$urlActual];
        }else{
            $funcion = $this->rutasPOST[$urlActual];
        }

        if (in_array($urlActual, $rutas_protegidas) && !$auth) {
            header('Location: /bienesRaicesMVC/public/');
        }


        if ($funcion) {
            call_user_func($funcion, $this);

        }else{

            echo "Pagina no Encontrada";
        }
    }

    public function render($view, $datos = []){

        foreach ($datos as $key => $value) {
            $$key = $value;
        }


        ob_start();

        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();

        include __DIR__ . "/views/layout.php";
    }

}





?>









