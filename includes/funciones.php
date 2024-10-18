<?php
define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate(string $nombre){
    
    include TEMPLATES_URL . "/$nombre.php";

}


function estAutenticado(){
   
    session_start();
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    
    if (!$_SESSION['login']) {
        
        header('Location: /bienesRaicesMVC/public/');
        
    }
}

function debuguear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function sanitizar($html) : string{
    $s = htmlspecialchars($html);
    return $s;

}

function validarOredireccionar(string $url){

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header("Location: {$url}");
    }

    return $id;
}

// function mostrarNotidicacion($codigo){
//     $mensaje = "";

//     switch ($codigo) {
//         case 1:
//             $mensaje = "Creada Correctamente";
//             break;
//         case 2:
//             $mensaje = "Actualizada Correctamente";
//             break;
//         case 2:
//             $mensaje = "Eliminada Correctamente";
//             break;
//         default:
//             $mensaje = false;
//             break;
//     }
//     return $mensaje;

// }






