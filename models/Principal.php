<?php 

namespace Model;


class Principal{
    
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';
    protected static $errores = [];

    public static function setDB($database){
        self::$db = $database;
    }

    public function crear(){
        $atributos = $this->sanitizarCampos();

        $query = "INSERT INTO ". static::$tabla ." (";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado = self::$db->query($query);
        if ($resultado) {

            if (static::$tabla === "vendedores") {
                header('Location: /vendedores/index?resultado=1');
            } else {
                header('Location: /admin?resultado=1');

            }
            


        }
    
    }

    public function Actualizar(){
        $atributos = $this->sanitizarCampos();

        $valores = [];

        foreach ($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla ." SET ";
        $query .= join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) ."' ";
        $query .= " LIMIT 1";
        
        $resultado = self::$db->query($query);

        if ($resultado) {

            if (static::$tabla === "vendedores") {
                header('Location: /vendedores/index?resultado=2');
    
            } else {
                header('Location: /admin?resultado=2');
    
            }
        }
    }

    public function eliminar(){

        $query = "DELETE FROM ". static::$tabla ." WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);

        if ($resultado) {
            $this->borrarImagen();

            if (static::$tabla === "vendedores") {
            
                header('Location: /vendedores/index?resultado=3');
              
    
            }else {

                header('Location: /admin?resultado=3');

            }
           
        }
    }

    public function borrarImagen(){
        $carpetaImagenes = $_SERVER['DOCUMENT_ROOT'] . '/' .'imagenes/';

        $existeArchivo = file_exists($carpetaImagenes . $this->imagen);

        if ($existeArchivo) {

            unlink($carpetaImagenes . $this->imagen);
        }

    }


    public function atributos(){
        $atributos = [];
        foreach (static::$columnasDB as $columna) {
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;

        }

        return $atributos;    
    }


    public function sanitizarCampos(){
        $atributos = $this->atributos();
        $sanitizado = [];    
        
        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }

    public function setImagen($imagen){
        if ( $this->id ) {

            $carpetaImagenes = $_SERVER['DOCUMENT_ROOT'] . '/' .'imagenes/';
            
            $existeArchivo = file_exists($carpetaImagenes . $this->imagen);
           

            if ($existeArchivo) {
                unlink($carpetaImagenes . $this->imagen);
            }

        }



        if ($imagen) {

            $this->imagen = $imagen;

        }



    }

    public static function getErrores(){
        return static::$errores;
    }

    public function validar(){
        static::$errores = [];
        
        return static::$errores;
    }

    public static function all(){
        $query = "SELECT * FROM " . static::$tabla;

        $resultado = self::consultarSQL($query);

        return $resultado;
    }

    public static function get($cantidad){
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;

        $resultado = self::consultarSQL($query);

        return $resultado;
    }



    public static function find($id){
        $query = "SELECT * FROM ". static::$tabla ." WHERE id = {$id}";

        $resultado = self::consultarSQL($query);
        //debuguear( array_shift($resultado) );

        return array_shift($resultado);
    }


    public static function consultarSQL($query){

        $resultado = self::$db->query($query);

        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = static::crearObjeto($registro);
        }

        // debuguear($array);

        $resultado->free();

        return $array;

    }  

    protected static function crearObjeto($registro){

        $objeto = new static;
        
        foreach ($registro as $key => $value) {

            if (property_exists($objeto, $key)) {
                
                $objeto->$key = $value;
            }
        }
        

        return $objeto;
    }   

    public function sincronizarActilizar($args = []){
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                
                $this->$key = $value;

            }        
        }
    }


}












?>