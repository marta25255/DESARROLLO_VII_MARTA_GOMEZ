<?php
session_start();

// Definir una lista de productos
$productos = [
    1 => ["nombre" => "Producto 1", "precio" => 10],
    2 => ["nombre" => "Producto 2", "precio" => 20],
    3 => ["nombre" => "Producto 3", "precio" => 30],
    4 => ["nombre" => "Producto 4", "precio" => 40],
    5 => ["nombre" => "Producto 5", "precio" => 50],
];

// Verificar si se ha añadido un producto al carrito
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Iniciar el carrito si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    // Agregar el producto al carrito
    if (isset($productos[$producto_id])) {
        $_SESSION['carrito'][$producto_id] = $productos[$producto_id];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>

    <ul>
        <?php foreach ($productos as $id => $producto): ?>
            <li>
                <strong><?php echo $producto['nombre']; ?></strong> - $<?php echo number_format($producto['precio'], 2); ?>
                <form action="productos.php" method="POST" style="display:inline;">
                    <input type="hidden" name="producto_id" value="<?php echo $id; ?>">
                    <button type="submit">Añadir al carrito</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Carrito</h2>
    <ul>
        <?php if (!empty($_SESSION['carrito'])): ?>
            <?php foreach ($_SESSION['carrito'] as $producto): ?>
                <li><?php echo $producto['nombre']; ?> - $<?php echo number_format($producto['precio'], 2); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>El carrito está vacío.</li>
        <?php endif; ?>
    </ul>

</body>
</html>
