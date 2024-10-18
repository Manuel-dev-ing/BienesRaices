<?php

namespace Model;

use Model\Principal;


class Propiedad extends Principal{
    protected static $columnasDB = ['id', 'titulo', 'ubicacion', 'precio', 'imagen', 'descripcion', 'mtsterreno', 'mtscasa', 'habitaciones', 'wc', 'estacionamiento', 'vendedores_id'];
    
    protected static $tabla = 'propiedades';

    public $id;
    public $titulo;
    public $ubicacion;
    public $precio;
    public $imagen;
    public $descripcion;
    public $mtsterreno;
    public $mtscasa;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $vendedores_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->ubicacion = $args['ubicacion'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->mtsterreno = $args['mtsterreno'] ?? '';
        $this->mtscasa = $args['mtscasa'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->vendedores_id = $args['vendedores_id'] ?? '';
    }


    public function validar(){
        
        if (!$this->titulo) {
            self::$errores[] = "Debe añadir un titulo";
        }
        
        if (!$this->ubicacion) {
            self::$errores[] = "Debe añadir una ubicacion";
        }
        if (!$this->precio) {
            self::$errores[] = "El Precio es obligatorio";
        }

        if (!$this->imagen) {
            self::$errores[] = "La Imagen es obligatoria";
        }

        if (!$this->descripcion) {
            self::$errores[] = "La Descripcion es obligatoria";
        }
        if (!$this->mtsterreno) {
            self::$errores[] = "La Cantidad de metros del terreno es obligatoria";
        }
        if (!$this->mtscasa) {
            self::$errores[] = "La Cantidad de metros de la casa es obligatoria";
        }
        if (!$this->habitaciones) {
            self::$errores[] = "El numero de Habitaciones es obligatoria";
        }
        if (!$this->wc) {
            self::$errores[] = "La Cantidad de Baños es obligatoria";
        }
        if (!$this->estacionamiento) {
            self::$errores[] = "La Cantidad de Estacionamientos es obligatoria";
        }
        if(!$this->vendedores_id){
            self::$errores[] = "El Vendedor es obligatorio, Selecciona un vendedor";
        }


        return self::$errores;
    }


}

?>










