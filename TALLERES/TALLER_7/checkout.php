<?php
require 'config_sesion.php';

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
$total = 0;

foreach ($carrito as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}

// Establecer cookie del nombre de usuario por 24 horas
if (isset($_POST['nombre'])) {
    setcookie('nombre_usuario', htmlspecialchars($_POST['nombre']), time() + 86400, '/', '', isset($_SERVER['HTTPS']), true);
}

// Vaciar carrito
$_SESSION['carrito'] = [];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de la Compra</title>
</head>
<body>
    <h1>Resumen de tu Compra</h1>
    <p><strong>Total pagado:</strong> $<?php echo number_format($total, 2); ?></p>
    <p>Gracias por tu compra!</p>
    <a href="productos.php">Volver a productos</a>
</body>
</html>
