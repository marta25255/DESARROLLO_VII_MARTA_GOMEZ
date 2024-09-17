<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';

// Clase Gerente que hereda de Empleado e implementa Evaluable
class Gerente extends Empleado implements Evaluable {
    private $departamento;
    private $bono;

    // Constructor
    public function __construct($nombre, $idEmpleado, $salarioBase, $departamento) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->departamento = $departamento;
        $this->bono = 0; // Inicia con un bono de 0
    }

    // Método para asignar bonos
    public function asignarBono($bono) {
        $this->bono = $bono;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    // Implementación de evaluarDesempenio() de la interfaz Evaluable
    public function evaluarDesempenio() {
        return "Evaluando el desempeño del Gerente $this->nombre en el departamento $this->departamento.";
    }

    // Obtener el salario total con bono
    public function getSalarioTotal() {
        return $this->salarioBase + $this->bono;
    }
}
