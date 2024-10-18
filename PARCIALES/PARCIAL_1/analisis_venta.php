<?php

include "procesamiento_ventas.php";

$datos_ventas = [
    "producto1" => [
        "nombre" => "Laptop",
        "precio" => 1000,
        "producto_cant" => 5,
        "region" => "Norte"
    ],
    "producto2" => [
        "nombre" => "Tablet",
        "precio" => 100,
        "producto_cant" => 10,
        "region" => "Sur"
    ],
    "producto3" => [
        "nombre" => "Teléfono",
        "precio" => 250,
        "producto_cant" => 8,
        "region" => "Este"
    ],
    "producto4" => [
        "nombre" => "Auriculares",
        "precio" => 80,
        "producto_cant" => 15,
        "region" => "Oeste"
    ],
    "producto5" => [
        "nombre" => "Monitor",
        "precio" => 100,
        "producto_cant" => 6,
        "region" => "Sur"
    ]
];

calcular_total_ventas($datos_ventas);
producto_mas_vendido($datos_ventas);
ventas_por_region($datos_ventas);

?>

<!DOCTYPE html>
<html lang="es">

    <table>
        <td><?php echo $venta -> calcular_total_ventas($datos_ventas)?></td>
        <td><?php echo $venta -> producto_mas_vendido($datos_ventas)?></td>
        <td><?php echo $venta -> ventas_por_region($datos_ventas)?></td>
    </table>

</html>