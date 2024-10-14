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

?>