<?php

// concepto de encapsulamiento 
/*colocar private, public o protect. ejemplo: */

class person {
    private $nombre;
    private $edad;

//constructor 

public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
}

public function getNombre() {
    return $this->nombre;
}

public function setNombre($nombre) {
    return $this->nombre;
}


public function getEdad() {
    return $this->edad;
}

public function setEdad($edad) {
   return $this->nombre;
}
}

//se crea el objeto e la clase 

//obtener y mostrar 

//modificar el nombre de los valores 

//mostrar actualizados 
?>