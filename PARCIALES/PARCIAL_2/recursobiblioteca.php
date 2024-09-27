<?php

class RecursoBiblioteca {
    public $id;
    public $titulo;
    public $autor;
    public $anioPublicacion;
    public $estado;
    public $fechaAdquisicion;
    public $tipo;

    public function __construct($datos) {
        foreach ($datos as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}

// Implementar las clases Libro, Revista y DVD aquí

// clase de libro

class libro extends RecursoBiblioteca implements prestable {
    private $isbn;

    public function __construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo, $isbn) {
        parent::__construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo);
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->estado = $estado;
        $this->fechaAdquisicion = $fechaAdquisicion;
        $this->tipo = $tipo;
        $this->isbn = $isbn;
    }

    public function obtenerDetallesPrestamo(): string {
        return "El titulo: " . $this->titulo;
        return " " . $this->autor;
        return " " . $this->anioPublicacion;
        return " " . $this->estado;
        return " " . $this->fechaAdquisicion;
        return " " . $this->tipo;
        return " " . $this->isbn;
    }

}

// clase de revista

class Revista extends RecursoBiblioteca implements prestable{
    private $numeroEdicion;

    public function __construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo, $numeroEdicion) {
        parent::__construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo);
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->estado = $estado;
        $this->fechaAdquisicion = $fechaAdquisicion;
        $this->tipo = $tipo;
        $this->numeroEdicion = $numeroEdicion;
    }

    public function obtenerDetallesPrestamo(): string {
        return "El titulo: " . $this->titulo;
        return " " . $this->autor;
        return " " . $this->anioPublicacion;
        return " " . $this->estado;
        return " " . $this->fechaAdquisicion;
        return " " . $this->tipo;
        return " " . $this->numeroEdicion;
    }
}


//clase de DVD

class DVD extends RecursoBiblioteca implements prestable {
    private $duracion;

    public function __construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo, $duracion) {
        parent::__construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $tipo);
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->estado = $estado;
        $this->fechaAdquisicion = $fechaAdquisicion;
        $this->tipo = $tipo;
        $this->duracion = $duracion;
    }

    public function obtenerDetallesPrestamo(): string {
        return "El titulo: " . $this->titulo;
        return " " . $this->autor;
        return " " . $this->anioPublicacion;
        return " " . $this->estado;
        return " " . $this->fechaAdquisicion;
        return " " . $this->tipo;
        return " " . $this->duracion;
    }
}



class GestorBiblioteca {
    private $recursos = [];

    public function cargarRecursos() {
        $json = file_get_contents('biblioteca.json');
        $data = json_decode($json, true);
        

        foreach ($data as $recursoData) {
            $recurso = new RecursoBiblioteca($recursoData);
            $this->recursos[] = $recurso;

            switch ($recursoData['tipo']) {
                case 'disponible':
                    $nuevolibro = new  RecursoBiblioteca(
                        $recursoData['ID'],
                        $recursoData['autor'],
                        $recursoData['anioPublicacion'],
                        $recursoData['estado'],
                        $recursoData['fechaAdquisicion'],
                        $recursoData['tipo'],
                        $recursoData['isbn']
                    );
                    break;
                case 'prestado':
                    $nuevolibro = new  RecursoBiblioteca(
                        $recursoData['ID'],
                        $recursoData['autor'],
                        $recursoData['anioPublicacion'],
                        $recursoData['estado'],
                        $recursoData['fechaAdquisicion'],
                        $recursoData['tipo'],
                        $recursoData['isbn']
                    );
                    break;
                case 'en_reparacion':
                    $nuevolibro = new  RecursoBiblioteca(
                        $recursoData['ID'],
                        $recursoData['autor'],
                        $recursoData['anioPublicacion'],
                        $recursoData['estado'],
                        $recursoData['fechaAdquisicion'],
                        $recursoData['tipo'],
                        $recursoData['isbn']
                    );
                    break;
                default:
                    throw new Exception("Tipo no existe");
            }
        
        return $this->recursos;
    }
}


    // Implementar los demás métodos aquí

    //AGREGAR
    public function agregarRecurso(RecursoBiblioteca $recurso) {
        $this->recursos[] = $recurso;
    }
    
    //ELIMINAR
    public function eliminarRecurso($id) {
        foreach ($this->recursos as $id => $recurso) {
            if ($recurso->id === $id) {
                unset($this->recursos[$id]);
                return true;
            }
        }
        return false;
    }

    //ACTUALIZAR - RECURSO
    public function actualizarRecurso(RecursoBiblioteca $recursoActualizado) {
        foreach ($this->recursos as &$recurso) {
            if ($recurso->id === $recursoActualizado->id) {
                $recurso = $recursoActualizado;
                return true;
            }
        }
        return false;
    }

    // ACTUALIZAR - ESTADO DEL RECURSO
    public function actualizarEstadoTarea($id, $nuevoEstado) {
        foreach ($this->recursos as &$recurso) {
            if ($recurso->id === $id) {
                $recurso->estado = $nuevoEstado;
                return true;
            }
        }
        return false;
    }



    //BUSCAR
    public function buscarTareasPorEstado($estado) {
        $resultados = [];
        foreach ($this->recursos as $recurso) {
            if ($recurso->estado === $estado) {
                $resultados[] = $recurso;
            }
        }
        return $resultados;
    }

    // LISTAR

    public function listarTareas($filtroEstado = '', $CampoOrden = 'id' , $direccionOrden = 'ASC') {
        foreach ($this->recursos as $recurso) {
            if ($filtroEstado === '' || $recurso->estado === $filtroEstado) {
                echo $recurso;
            }
        }
    }



   
   





}