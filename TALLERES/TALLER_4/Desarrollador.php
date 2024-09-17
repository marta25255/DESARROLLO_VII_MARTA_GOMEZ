<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';

// Clase Desarrollador que hereda de Empleado e implementa Evaluable
class Desarrollador extends Empleado implements Evaluable {
    private $lenguajePrincipal;
    private $nivelExperiencia;

    // Constructor
    public function __construct($nombre, $idEmpleado, $salarioBase, $lenguajePrincipal, $nivelExperiencia) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->lenguajePrincipal = $lenguajePrincipal;
        $this->nivelExperiencia = $nivelExperiencia;
    }

    public function getLenguajePrincipal() {
        return $this->lenguajePrincipal;
    }

    public function setLenguajePrincipal($lenguajePrincipal) {
        $this->lenguajePrincipal = $lenguajePrincipal;
    }

    public function getNivelExperiencia() {
        return $this->nivelExperiencia;
    }

    public function setNivelExperiencia($nivelExperiencia) {
        $this->nivelExperiencia = $nivelExperiencia;
    }

    // Implementación de evaluarDesempenio() de la interfaz Evaluable
    public function evaluarDesempenio() {
        return "Evaluando el desempeño del Desarrollador $this->nombre, experto en $this->lenguajePrincipal.";
    }
}
