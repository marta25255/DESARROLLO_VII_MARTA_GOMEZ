<?php
// Declarar una variable $calificacion y asignarle un valor entre 0 y 100
$calificacion = 85;

// Usar una estructura if-elseif-else para determinar la letra correspondiente a la calificación
if ($calificacion >= 90 && $calificacion <= 100) {
    $letra = 'A';
} elseif ($calificacion >= 80 && $calificacion < 90) {
    $letra = 'B';
} elseif ($calificacion >= 70 && $calificacion < 80) {
    $letra = 'C';
} elseif ($calificacion >= 60 && $calificacion < 70) {
    $letra = 'D';
} else {
    $letra = 'F';
}

// Imprimir un mensaje con la letra de la calificación
echo "Tu calificación es $letra. ";

// Usar el operador ternario para determinar si es "Aprobado" o "Reprobado"
$estado = ($letra == 'F') ? "Reprobado" : "Aprobado";
echo "$estado.<br>";

// Usar un switch para imprimir un mensaje adicional basado en la letra de la calificación
switch ($letra) {
    case 'A':
        echo "Excelente trabajo";
        break;
    case 'B':
        echo "Buen trabajo";
        break;
    case 'C':
        echo "Trabajo aceptable";
        break;
    case 'D':
        echo "Necesitas mejorar";
        break;
    case 'F':
        echo "Debes esforzarte más";
        break;
    default:
        echo "Calificación no válida";
        break;
}
?>