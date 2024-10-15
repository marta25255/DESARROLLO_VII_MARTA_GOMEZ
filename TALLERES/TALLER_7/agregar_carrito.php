<?php
require 'config_sesion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto_id'])) {
    $producto_id = (int)$_POST['producto_id'];

    // Simular la lista de productos
    $productos = [
        1 => ["nombre" => "Producto 1", "precio" => 10],
        2 => ["nombre" => "Producto 2", "precio" => 20],
        3 => ["nombre" => "Producto 3", "precio" => 30],
        4 => ["nombre" => "Producto 4", "precio" => 40],
        5 => ["nombre" => "Producto 5", "precio" => 50],
    ];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($productos[$producto_id])) {
        if (isset($_SESSION['carrito'][$producto_id])) {
            $_SESSION['carrito'][$producto_id]['cantidad']++;
        } else {
            $_SESSION['carrito'][$producto_id] = [
                "nombre" => $productos[$producto_id]["nombre"],
                "precio" => $productos[$producto_id]["precio"],
                "cantidad" => 1
            ];
        }
    }

    header('Location: productos.php');
    exit;
}
