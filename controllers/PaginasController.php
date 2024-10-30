<?php

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;


class PaginasController
{
    public static function index(Router $router){
        $cantidad = 6;
        $propiedades = Propiedad::get($cantidad);

        $router->render("paginas/index", [
            'propiedades'=>$propiedades
        ]);

    }

    public static function nosotros(){
        echo "nosotros";
    }

    public static function propiedades(Router $router){
        $propiedades = Propiedad::all();

        $router->render("paginas/propiedades", [
            'propiedades'=>$propiedades
        ]);

    }
    public static function propiedad(Router $router){

        $id = validarOredireccionar("../");    

        $propiedades = Propiedad::find($id);

        $router->render("paginas/propiedad", [
            'propiedad'=>$propiedades
        ]);

    }

    public static function blog(){
        echo "blog";
    }
    public static function entrada(){
        echo "entrada";
    }
    public static function contacto(Router $router){
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];
            
            $mail = new PHPMailer();

            $mail->isSMTP();
            $mail->Host = $_ENV['sandbox.smtp.mailtrap.io'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['61ea801167ca75'];
            $mail->Password = $_ENV['1df9ac5a000b30'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = $_ENV['2525'];

            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('al15020032@itsa.edu.mx');//A quien le enviamos el email
            $mail->Subject = 'Tienes un Nuevo Mensaje';

            //Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $contenido = '<html>';
            $contenido .= '<p>Tienes un Nuevo Mensaje</p>';
            $contenido .= '<p>Nombre: '. $nombre .'</p>';
            $contenido .= '<p>Correo: '. $correo .'</p>';
            $contenido .= '<p>Telefono: '. $telefono .'</p>';
            $contenido .= '<p>Mensaje: '. $mensaje .'</p>';
            $contenido .= '</html>';


            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo sin HTML';

            if ($mail->send()) {
                
                $mensaje = "Mensaje enviado Correctamente";

            }else{
                $mensaje = "El mensaje no se pudo enviar";
            }

        }

        $router->render("paginas/contacto", [
            'mensaje'=>$mensaje
        ]);

    }
    
}




?>