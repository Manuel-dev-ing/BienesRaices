
<?php 


function conectarDB(): mysqli{

    $db = new mysqli('localhost', 'root', 'admin', 'inmobiliaria');

    if (!$db) {
    
        echo "Error no se conecto";
        exit;
    }  

    return $db;
}





?>
















