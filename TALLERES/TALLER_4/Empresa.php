<?php
require_once 'Gerente.php';
require_once 'Desarrollador.php';

class Empresa {
    private $empleados = [];

    // Agregar empleados a la empresa
    public function agregarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

    // Listar todos los empleados
    public function listarEmpleados() {
        foreach ($this->empleados as $empleado) {
            echo "Nombre: " . $empleado->getNombre() . ", ID: " . $empleado->getIdEmpleado() . "\n";
        }
    }

    // Calcular la nómina total
    public function calcularNominaTotal() {
        $total = 0;
        foreach ($this->empleados as $empleado) {
            // Si es un Gerente, incluimos el bono en el salario total
            if ($empleado instanceof Gerente) {
                $total += $empleado->getSalarioTotal();
            } else {
                $total += $empleado->getSalarioBase();
            }
        }
        return $total;
    }

    // Evaluar desempeño de todos los empleados que implementan Evaluable
    public function evaluarDesempenio() {
        foreach ($this->empleados as $empleado) {
            if ($empleado instanceof Evaluable) {
                echo $empleado->evaluarDesempenio() . "\n";
            } else {
                echo "El empleado " . $empleado->getNombre() . " no puede ser evaluado.\n";
            }
        }
    }
}
