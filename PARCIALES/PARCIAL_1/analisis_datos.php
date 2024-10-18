<?php 

include "estadisticas.php";

$datos = [1,2,3,4,5,6,7,8,9];


?>

<!DOCTYPE html>
<html lang="es">

    <table>
        <td><?php echo $medias -> calcular_media($datos)?></td>
        <td><?php echo $mediana -> calcular_mediana($datos)?></td>
        <td><?php echo $modas -> calcular_moda($datos)?></td>
    </table>

</html>



