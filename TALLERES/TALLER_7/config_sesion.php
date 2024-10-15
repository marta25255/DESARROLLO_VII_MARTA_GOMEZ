<?php
// Configurar opciones de sesión antes de iniciar la sesión
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);

session_start();

// Regenerar el ID de sesión periódicamente
if (!isset($_SESSION['ultima_actividad']) || (time() - $_SESSION['ultima_actividad'] > 300)) {
    session_regenerate_id(true);
    $_SESSION['ultima_actividad'] = time();
}


// Configuración de las sesiones con mayor seguridad
session_start([
    'cookie_lifetime' => 86400, // 1 día
    'cookie_httponly' => true,  // Evita acceso a la cookie desde JS
    'cookie_secure' => isset($_SERVER['HTTPS']), // Solo en HTTPS
    'cookie_samesite' => 'Strict' // Previene envío en solicitudes cruzadas
]);
