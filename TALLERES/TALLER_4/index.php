<?php
require_once 'Empresa.php';

// Crear una empresa
$empresa = new Empresa();

// Crear empleados
$gerente = new Gerente("Ana Pérez", 101, 5000, "Ventas");
$gerente->asignarBono(1000);

$desarrollador = new Desarrollador("Carlos Ruiz", 102, 4000, "PHP", "Senior");

// Agregar empleados a la empresa
$empresa->agregarEmpleado($gerente);
$empresa->agregarEmpleado($desarrollador);

// Listar empleados
echo "Lista de empleados:\n";
$empresa->listarEmpleados();

// Calcular y mostrar la nómina total
echo "\nNómina total: $" . $empresa->calcularNominaTotal() . "\n";

// Evaluar desempeño de los empleados
echo "\nEvaluación de desempeño:\n";
$empresa->evaluarDesempenio();
