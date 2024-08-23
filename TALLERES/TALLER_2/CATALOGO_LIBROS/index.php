<?php
include 'funciones.php';
include 'encabezado.php';

// Obtener la lista de libros
$libros = obtenerLibros();

// Mostrar los detalles de cada libro
foreach ($libros as $libro) {
    echo mostrarDetallesLibro($libro);
}

include 'footer.php';
?>

