<?php 

namespace Model;

use Model\Principal;

class Vendedor extends Principal{

    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];
    
    protected static $tabla = 'vendedores';

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
     
    }

    
    public function validar(){
        
        if (!$this->nombre) {
            self::$errores[] = "El Nombre es Obligatorio";
        }
        
        if (!$this->apellido) {
            self::$errores[] = "El Apellido es obligatorio";
        }

        if (!$this->telefono) {
            self::$errores[] = "El Telefono es obligatorio";
        }

        if (!preg_match('/[0-9]{10}/', $this->telefono)) {
            self::$errores[] = "Formato no valido";
        }

        return self::$errores;
    }



}















?>