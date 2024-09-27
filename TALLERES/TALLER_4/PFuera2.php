<?php
// 1. FUNCIONES DE CADENAS:

// strlen() - Devuelve la longitud de una cadena
// Ejemplo: strlen("Hola Mundo") devuelve 10

// strtoupper() - Convierte una cadena a mayúsculas
// Ejemplo: strtoupper("hola mundo") devuelve "HOLA MUNDO"

// strtolower() - Convierte una cadena a minúsculas
// Ejemplo: strtolower("HOLA MUNDO") devuelve "hola mundo"

// substr() - Extrae una parte de una cadena
// Ejemplo: substr("Hola Mundo", 0, 4) devuelve "Hola"
// Ejemplo: substr("Hola Mundo", 5, 5) devuelve "Mundo"

// str_replace() - Reemplaza una subcadena dentro de una cadena
// Ejemplo: str_replace("Mundo", "PHP", "Hola Mundo") devuelve "Hola PHP"

// strpos() - Encuentra la posición de la primera ocurrencia de una subcadena
// Ejemplo: strpos("Hola Mundo", "Mundo") devuelve 5 (la posición en que comienza "Mundo")
// Nota: Si la subcadena no se encuentra, devuelve false

// trim() - Elimina espacios en blanco (u otros caracteres) del principio y final de una cadena
// Ejemplo: trim("   Hola Mundo   ") devuelve "Hola Mundo"

// explode() - Divide una cadena en un array, usando un delimitador
// Ejemplo: explode(" ", "Hola Mundo") devuelve ["Hola", "Mundo"]

// implode() - Combina los elementos de un array en una cadena, con un delimitador
// Ejemplo: implode("-", ["Hola", "Mundo"]) devuelve "Hola-Mundo"

// strrev() - Invierte una cadena
// Ejemplo: strrev("Hola Mundo") devuelve "odnuM aloH"

// 2. FUNCIONES DE ARRAYS:

// count() - Cuenta el número de elementos de un array
// Ejemplo: count([1, 2, 3, 4]) devuelve 4

// array_push() - Añade uno o más elementos al final de un array
// Ejemplo: array_push($array, 5) añade 5 al final de $array

// array_pop() - Elimina el último elemento de un array
// Ejemplo: array_pop($array) elimina y devuelve el último elemento del array

// array_merge() - Combina dos o más arrays en uno solo
// Ejemplo: array_merge([1, 2], [3, 4]) devuelve [1, 2, 3, 4]

// in_array() - Comprueba si un valor existe en un array
// Ejemplo: in_array(3, [1, 2, 3, 4]) devuelve true

// array_slice() - Extrae una porción de un array
// Ejemplo: array_slice([1, 2, 3, 4], 1, 2) devuelve [2, 3]

// array_shift() - Elimina el primer elemento de un array
// Ejemplo: array_shift([1, 2, 3]) elimina el 1 y devuelve el array [2, 3]

// array_unshift() - Añade uno o más elementos al inicio de un array
// Ejemplo: array_unshift($array, 0) añade 0 al principio del array

// array_reverse() - Invierte el orden de los elementos de un array
// Ejemplo: array_reverse([1, 2, 3]) devuelve [3, 2, 1]

// sort() - Ordena un array en orden ascendente
// Ejemplo: sort($array) ordena el array en orden creciente

// rsort() - Ordena un array en orden descendente
// Ejemplo: rsort($array) ordena el array en orden decreciente

// array_sum() - Devuelve la suma de los valores de un array
// Ejemplo: array_sum([1, 2, 3, 4]) devuelve 10

// array_unique() - Elimina valores duplicados de un array
// Ejemplo: array_unique([1, 2, 2, 3, 3]) devuelve [1, 2, 3]
?>

<?php
// PROBLEMA DE FUNCIONES DE CADENAS Y ARRAYS:

// Problema:
// Escribe una función en PHP que tome como entrada una cadena de texto que contiene varias palabras separadas por espacios.
// La función debe hacer lo siguiente:
// 1. Mostrar la longitud total de la cadena.
// 2. Convertir la cadena a mayúsculas.
// 3. Dividir la cadena en un array de palabras.
// 4. Añadir una nueva palabra al final del array de palabras.
// 5. Ordenar el array de palabras en orden alfabético.
// 6. Combinar el array de nuevo en una cadena, separando las palabras por guiones (-).
// 7. Mostrar la nueva cadena final.

function processString($text) {
    // 1. Mostrar la longitud total de la cadena
    // Ejemplo: strlen("Hola Mundo") devuelve 10
    echo "Longitud de la cadena: " . strlen($text) . "\n";
    
    // 2. Convertir la cadena a mayúsculas
    // Ejemplo: strtoupper("Hola Mundo") devuelve "HOLA MUNDO"
    $textUpper = strtoupper($text);
    echo "Cadena en mayúsculas: " . $textUpper . "\n";
    
    // 3. Dividir la cadena en un array de palabras
    // Ejemplo: explode(" ", "HOLA MUNDO") devuelve ["HOLA", "MUNDO"]
    $wordsArray = explode(" ", $textUpper);
    echo "Array de palabras: ";
    print_r($wordsArray);
    
    // 4. Añadir una nueva palabra al final del array de palabras
    // Ejemplo: array_push($wordsArray, "PHP") añade "PHP" al final
    array_push($wordsArray, "PHP");
    echo "Array después de añadir 'PHP': ";
    print_r($wordsArray);
    
    // 5. Ordenar el array de palabras en orden alfabético
    // Ejemplo: sort($wordsArray) ordena el array en orden alfabético
    sort($wordsArray);
    echo "Array ordenado: ";
    print_r($wordsArray);
    
    // 6. Combinar el array de nuevo en una cadena, separando las palabras por guiones (-)
    // Ejemplo: implode("-", ["HOLA", "MUNDO", "PHP"]) devuelve "HOLA-MUNDO-PHP"
    $finalString = implode("-", $wordsArray);
    echo "Cadena final: " . $finalString . "\n";
}

// Ejecución del problema
processString("Hola Mundo esto es un ejercicio");

?>



