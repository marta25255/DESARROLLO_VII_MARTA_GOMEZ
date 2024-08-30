<?php 

// 1. Leer el archivo JSON y convertirlo en un array de PHP
$archivoInventario = 'inventario.json';
$inventario = json_decode(file_get_contents($archivoInventario), true);

if ($inventario === null) {
    echo "Error al leer el archivo JSON.";
    exit;
}

// 2. Ordenar el array alfabéticamente por nombre usando usort()
usort($inventario, function($a, $b) {
    return strcmp($a['nombre'], $b['nombre']);
});

// 3. Mostrar el inventario ordenado
echo "<h3>Resumen del Inventario Ordenado:</h3>";
foreach ($inventario as $producto) {
    echo "Producto: {$producto['nombre']} - Cantidad: {$producto['cantidad']} - Precio: {$producto['precio']}</br>";
}

// 4. Filtrar productos con stock bajo usando array_filter()
$umbralStockBajo = 5;
$productosStockBajo = array_filter($inventario, function($producto) use ($umbralStockBajo) {
    return $producto['cantidad'] <= $umbralStockBajo;
});

// Mostrar informe de productos con stock bajo
echo "</br><h3>Informe de Productos con Stock Bajo:</h3>";
if (!empty($productosStockBajo)) {
    foreach ($productosStockBajo as $producto) {
        echo "Producto: {$producto['nombre']} - Cantidad: {$producto['cantidad']}</br>";
    }
} else {
    echo "No hay productos con stock bajo.</br>";
}

// 5. Calcular el valor total del inventario usando array_sum() y array_map()
$valorTotal = array_sum(array_map(function($producto) {
    return $producto['cantidad'] * $producto['precio'];
}, $inventario));

echo "</br>Valor total del inventario: $$valorTotal</br>";

// 6. (Opcional) Convertir el array de PHP de vuelta a JSON si es necesario
$inventarioJSON = json_encode($inventario, JSON_PRETTY_PRINT);
echo "</br>Inventario en formato JSON:</br>";
echo "<pre>$inventarioJSON</pre>";

?>

