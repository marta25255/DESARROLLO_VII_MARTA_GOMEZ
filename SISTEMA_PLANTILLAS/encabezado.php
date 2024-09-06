<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tituloPagina, ENT_QUOTES, 'UTF-8'); ?></title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
        nav ul { list-style-type: none; padding: 0; }
        nav ul li { display: inline; margin-right: 10px; }
        .activo { font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($tituloPagina, ENT_QUOTES, 'UTF-8'); ?></h1>
        <?php echo generarMenu($paginaActual); ?>
    </header>
    <main>
        <!-- Contenido principal de la página -->
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Mi Sitio Web</p>
    </footer>
</body>
</html>
