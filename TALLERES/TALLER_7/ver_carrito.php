<?php
require 'config_sesion.php';

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];
$total = 0;

foreach ($carrito as $producto) {
    $total += $producto['precio'] * $producto['cantidad'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Tu Carrito</h1>
    <?php if (!empty($carrito)): ?>
        <ul>
            <?php foreach ($carrito as $id => $producto): ?>
                <li>
                    <?php echo htmlspecialchars($producto['nombre']); ?> - 
                    $<?php echo number_format($producto['precio'], 2); ?> x 
                    <?php echo $producto['cantidad']; ?>
                    <form action="eliminar_del_carrito.php" method="POST" style="display:inline;">
                        <input type="hidden" name="producto_id" value="<?php echo $id; ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Total:</strong> $<?php echo number_format($total, 2); ?></p>
        <form action="checkout.php" method="POST">
            <button type="submit">Finalizar Compra</button>
        </form>
    <?php else: ?>
        <p>El carrito está vacío.</p>
    <?php endif; ?>
    <a href="productos.php">Volver a productos</a>
</body>
</html>
