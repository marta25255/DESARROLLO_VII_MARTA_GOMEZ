<?php

include "analisis_venta.php";

function calcular_total_ventas($datos_ventas){
    $totalventas = 0;
    foreach ($datos_ventas as $producto) {
        $totalventas += $producto['precio'];
    }
    echo "</br>Total de ventas por sector: " . number_format($totalventas, 2) . "</br>";
}

function producto_mas_vendido($datos_ventas){  
    $mayor_cantidad = 0;
    $producto_mas_vendido = "";

    foreach ($datos_ventas as $producto => $datos) {
        if ($datos['producto_cant'] > $mayor_cantidad) {
            $mayor_cantidad = $datos['producto_cant'];
            $producto_mas_vendido = $producto;
        }
    }
    return ['productomasvendido' => $producto_mas_vendido, 'cantidad' => $mayor_cantidad];
}

function ventas_por_region($datos_ventas){
    $ventas_region = array();
    foreach ($datos_ventas as $producto => $datos) {
        $region = $datos['region'];
        $precio = $datos['precio'];
        $cantidad = $datos['producto_cant'];

        if (!isset($ventas_region[$region])) {
            $ventas_region[$region] = 0;
        }
        $ventas_region[$region] += $precio * $cantidad;
    }
    return $ventas_region;
}   