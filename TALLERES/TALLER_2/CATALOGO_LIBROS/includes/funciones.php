<?php
function obtenerLibros() {
    // Simulación de una base de datos con un array de libros
    $libros = [
        [
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'anio' => 1967,
            'genero' => 'Realismo mágico',
            'descripcion' => 'Una novela sobre la historia de la familia Buendía en el pueblo ficticio de Macondo.'
        ],
        [
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'anio' => 1949,
            'genero' => 'Distopía',
            'descripcion' => 'Una novela que presenta una visión totalitaria y opresiva del futuro.'
        ],
        [
            'titulo' => 'El gran Gatsby',
            'autor' => 'F. Scott Fitzgerald',
            'anio' => 1925,
            'genero' => 'Novela',
            'descripcion' => 'Una historia sobre el sueño americano y la decadencia de la alta sociedad en los años 20.'
        ],
        [
            'titulo' => 'Matar a un ruiseñor',
            'autor' => 'Harper Lee',
            'anio' => 1960,
            'genero' => 'Ficción',
            'descripcion' => 'Una novela que explora temas de racismo y justicia en el sur de Estados Unidos.'
        ],
        [
            'titulo' => 'Orgullo y prejuicio',
            'autor' => 'Jane Austen',
            'anio' => 1813,
            'genero' => 'Romántico',
            'descripcion' => 'Una novela que examina las costumbres sociales y las relaciones en la Inglaterra del siglo XIX.'
        ]
    ];

    return $libros;
}
?>

<?php
function mostrarDetallesLibro($libro) {
    if (!isset($libro['titulo']) || !isset($libro['autor']) || !isset($libro['anio']) || !isset($libro['genero'])) {
        return "Información del libro incompleta.";
    }

    // Retorna una cadena HTML con los detalles del libro
    $html = "<div class='libro-detalle'>";
    $html .= "<h2>" . htmlspecialchars($libro['titulo']) . "</h2>";
    $html .= "<p><strong>Autor:</strong> " . htmlspecialchars($libro['autor']) . "</p>";
    $html .= "<p><strong>Año:</strong> " . htmlspecialchars($libro['anio']) . "</p>";
    $html .= "<p><strong>Género:</strong> " . htmlspecialchars($libro['genero']) . "</p>";
    $html .= "</div>";

    return $html;
}
?>

<?php
include 'funciones.php'; // Asegúrate de que el archivo funciones.php esté en la misma carpeta o ajusta la ruta

// Obtener la lista de libros
$libros = obtenerLibros();

// Mostrar los detalles de cada libro
foreach ($libros as $libro) {
    echo mostrarDetallesLibro($libro);
}

include 'footer.php';
?>

