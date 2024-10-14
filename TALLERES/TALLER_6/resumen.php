<?php
$archivo_json = 'registros.json';
$registros = file_exists($archivo_json) ? json_decode(file_get_contents($archivo_json), true) : [];
?>

<h2>Resumen de Registros</h2>

<?php if (!empty($registros)): ?>
    <ul>
        <?php foreach ($registros as $registro): ?>
            <li>
                Fecha de Nacimiento: <?= htmlspecialchars($registro['fecha_nacimiento']) ?><br>
                Edad: <?= htmlspecialchars($registro['edad']) ?><br>
                Foto de Perfil: <img src="uploads/<?= htmlspecialchars($registro['foto_perfil']) ?>" alt="Foto de perfil" width="100">
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No hay registros disponibles.</p>
<?php endif; ?>
