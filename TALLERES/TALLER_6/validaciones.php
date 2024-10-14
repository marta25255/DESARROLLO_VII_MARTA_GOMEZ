<?php
function validarNombre($nombre) {
    return !empty($nombre) && strlen($nombre) <= 50;
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarEdad($fechaNacimiento) {
    // Verificar que la fecha esté en el formato correcto
    $fecha = DateTime::createFromFormat('Y-m-d', $fechaNacimiento);
    
    // Verificar que la fecha sea válida y esté bien formateada
    if ($fecha && $fecha->format('Y-m-d') === $fechaNacimiento) {
        $fechaActual = new DateTime();
        $edad = $fechaActual->diff($fecha)->y;
        
        // Validar que la edad esté entre 18 y 120 años
        return $edad >= 18 && $edad <= 120;
    }
    
    return false;
}

function validarSitioWeb($sitioWeb) {
    return empty($sitioWeb) || filter_var($sitioWeb, FILTER_VALIDATE_URL);
}

function validarGenero($genero) {
    $generosValidos = ['masculino', 'femenino', 'otro'];
    return in_array($genero, $generosValidos);
}

function validarIntereses($intereses) {
    $interesesValidos = ['deportes', 'musica', 'lectura'];
    return !empty($intereses) && count(array_intersect($intereses, $interesesValidos)) === count($intereses);
}

function validarComentarios($comentarios) {
    return strlen($comentarios) <= 500;
}

function validarFotoPerfil($archivo) {
    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
    $tamanoMaximo = 1 * 1024 * 1024; // 1MB

    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        return false;
    }

    if (!in_array($archivo['type'], $tiposPermitidos)) {
        return false;
    }

    if ($archivo['size'] > $tamanoMaximo) {
        return false;
    }

    return true;
}

// validacion de fecha de nacimiento

function validarFechaNacimiento($fechaNacimiento) {
    // Verificar que la fecha esté en el formato correcto
    $fecha = DateTime::createFromFormat('Y-m-d', $fechaNacimiento);
    
    // Verificar que la fecha sea válida y esté bien formateada
    if ($fecha && $fecha->format('Y-m-d') === $fechaNacimiento) {
        $fechaActual = new DateTime();
        $edad = $fechaActual->diff($fecha)->y;
        
        // Verificar que la edad sea entre 0 y 120 años
        if ($edad >= 0 && $edad <= 120) {
            return true;
        }
    }
    
    return false;

}

// validacion a foto de perfil - nombre unico 

function procesarFotoPerfil($archivo) {
    // Directorio donde se guardan las fotos de perfil
    $directorioDestino = 'uploads/perfiles/';
    
    // Obtener la extensión del archivo
    $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
    
    // Generar un nombre único para la imagen
    $nombreArchivoUnico = uniqid('perfil_', true) . '.' . $extension;
    
    // Comprobar si el archivo ya existe (aunque esto es improbable usando uniqid)
    $rutaCompleta = $directorioDestino . $nombreArchivoUnico;
    while (file_exists($rutaCompleta)) {
        // Si el archivo existe, generar un nuevo nombre
        $nombreArchivoUnico = uniqid('perfil_', true) . '.' . $extension;
        $rutaCompleta = $directorioDestino . $nombreArchivoUnico;
    }
    
    // Mover el archivo al directorio destino
    if (move_uploaded_file($archivo['tmp_name'], $rutaCompleta)) {
        return $nombreArchivoUnico;
    } else {
        return false; // Hubo un error subiendo el archivo
    }
}

// Función que devuelve el valor previamente ingresado en el formulario
function mantenerValor($campo) {
    return isset($_POST[$campo]) ? htmlspecialchars($_POST[$campo]) : '';
}


?>