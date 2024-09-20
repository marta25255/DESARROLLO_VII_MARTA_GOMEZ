<?php
// 1. Crear un arreglo de 10 nombres de ciudades
$ciudades = ["Nueva York", "Tokio", "Londres", "París", "Sídney", "Río de Janeiro", "Moscú", "Berlín", "Ciudad del Cabo", "Toronto"];

// 2. Imprimir el arreglo original
echo "Ciudades originales:\n";
print_r($ciudades);

// 3. Agregar 2 ciudades más al final del arreglo
array_push($ciudades, "Dubái", "Singapur");

// 4. Eliminar la tercera ciudad del arreglo
array_splice($ciudades, 2, 1);

// 5. Insertar una nueva ciudad en la quinta posición
array_splice($ciudades, 4, 0, "Mumbai");

// 6. Imprimir el arreglo modificado
echo "\nCiudades modificadas:\n";
print_r($ciudades);

// 7. Crear una función que imprima las ciudades en orden alfabético
function imprimirCiudadesOrdenadas($arr) {
    $ordenado = $arr;
    sort($ordenado);
    echo "Ciudades en orden alfabético:\n";
    foreach ($ordenado as $ciudad) {
        echo "- $ciudad\n";
    }
}

// 8. Llamar a la función
imprimirCiudadesOrdenadas($ciudades);

// TAREA: Crea una función que cuente y retorne el número de ciudades que comienzan con una letra específica
// Ejemplo de uso: contarCiudadesPorInicial($ciudades, 'S') debería retornar 1 (Singapur)
// Tu código aquí

function contarCiudadesPorInicial($ciudades, $inicial) {
    $contador = 0;
    $cities = [];  // Arreglo para almacenar las ciudades que cumplen con la condición
    
    // Recorremos el arreglo de ciudades
    foreach ($ciudades as $ciudad) {
        // Verificamos si la ciudad empieza con la letra especificada
        if (stripos($ciudad, $inicial) === 0) {
            $cities[] = $ciudad;  // Agregamos la ciudad al arreglo
            $contador++;
        }
    }
    
    // Mostramos el número de ciudades que cumplen con la condición
    echo "Número de ciudades que empiezan con '$inicial': $contador\n";
    // Mostramos las ciudades que cumplen con la condición
    echo "Ciudades: " . implode(", ", $cities) . "\n";
    // Retornamos el arreglo de las ciudades que cumplen con la condición
    return $cities;
}

?>