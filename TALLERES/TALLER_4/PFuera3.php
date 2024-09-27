<?php
// PROBLEMA DE PRÁCTICA:

// Problema:
// Crea una función en PHP que reciba una cadena de texto con varias frases separadas por comas.
// La función debe realizar las siguientes operaciones:
// 1. Mostrar cuántas frases hay en la cadena (usa una función de arrays). - count()
// 2. Convertir la primera letra de cada palabra a mayúsculas (función de cadena). - strtoupper()
// 3. Reemplazar cualquier signo de exclamación (!) con un punto (.) (función de cadena). - str_replace()
// 4. Dividir la cadena en un array de frases (función de array). - 
// 5. Ordenar las frases en orden inverso (función de array). - 
// 6. Volver a unir el array en una cadena, separando las frases por punto y coma (;). -
// 7. Mostrar la nueva cadena final.

<?php

function processSentences($text) {
    // --- count() ---
    // La función count() debe contar los elementos de un array, no se aplica a cadenas directamente.
    // Primero debes convertir la cadena en un array usando explode() y luego contar.
    $nuevacad = explode(", ", $text);  // Dividimos la cadena en frases separadas por comas
    echo "La cantidad de frases es: " . count($nuevacad) . "\n";

    // --- ucwords() ---
    // Convierte la primera letra de cada palabra en mayúscula en la cadena original
    $frasenue = ucwords($text);  
    echo "Cadena con cada palabra en mayúscula: " . $frasenue . "\n";

    // --- str_replace() ---
    // Aquí tienes un error tipográfico en 'str_repalce', debe ser 'str_replace'.
    // También, para que funcione con la variable, en lugar de un string literal, usa $text
    $text = str_replace("!", ".", $text);
    echo "Cadena reemplazando '!' por '.': " . $text . "\n";

    // --- explode() ---
    // Ya dividimos anteriormente con explode(), así que aquí solo imprimimos el array
    print_r($nuevacad);

    // --- array_reverse() ---
    // Invertimos el array de frases
    $nuevacadReversa = array_reverse($nuevacad);
    echo "Array invertido: ";
    print_r($nuevacadReversa);

    // --- implode() ---
    // Convertimos el array invertido de nuevo en una cadena, separando las frases por punto y coma.
    $nuevaCadena = implode("; ", $nuevacadReversa);
    echo "Cadena final unida por punto y coma: " . $nuevaCadena . "\n";
}

// Ejemplo de ejecución:
processSentences("hola mundo,como estas!,esta es una prueba,practica php!");

?>




