<?php
// 1. Crear un patrón de triángulo rectángulo usando asteriscos (*) con un bucle for
echo "<h3>Patrón de triángulo rectángulo:</h3>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

// 2. Generar una secuencia de números del 1 al 20, mostrando solo los impares
echo "<h3>Números impares del 1 al 20:</h3>";
$num = 1;
while ($num <= 20) {
    if ($num % 2 != 0) {
        echo $num . "<br>";
    }
    $num++;
}

// 3. Contador regresivo desde 10 hasta 1, pero saltando el número 5
echo "<h3>Contador regresivo desde 10 hasta 1 (saltando el 5):</h3>";
$counter = 10;
do {
    if ($counter != 5) {
        echo $counter . "<br>";
    }
    $counter--;
} while ($counter >= 1);


?>
