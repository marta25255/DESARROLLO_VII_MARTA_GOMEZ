Crea un nuevo archivo llamado perfil_usuario.php en la carpeta TALLER_2.
Define las siguientes variables:
nombre_completo (tu nombre completo)
edad (tu edad)
correo (tu correo electrónico)
telefono (tu número de teléfono)
Define una constante llamada OCUPACION con tu ocupación actual (por ejemplo, "Estudiante").
Crea un párrafo que incluya toda esta información utilizando diferentes métodos de concatenación e impresión que hemos aprendido (echo, print, printf).
Al final, utiliza var_dump para mostrar el tipo y valor de cada variable y la constante.
Asegúrate de que cada pieza de información se muestre en una nueva línea en el navegador.

<?php
$nombre_completo = "Marta Gomez";
$edad = 20;
$correo = "gomarta16@gmail.com";
$telefono = "+50763534910";

// Definir la constante
define ("OCUPACION", "Desarrollador-Alumno");

// Imprimir la información utilizando diferentes métodos de concatenación e impresión
echo "<p> Nombre Completo: " . $nombre_completo . "</p>";
print "<p>Edad: " . $edad . "</p>";
printf("<p>Correo Electrónico: %s</p>", $correo);
echo "<p>Teléfono: $telefono</p>";
echo "<p>Ocupación: " . OCUPACION . "</p>";

// Utilizar var_dump para mostrar el tipo y valor de cada variable y la constante
echo "<p>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
echo "</p>";

?>
