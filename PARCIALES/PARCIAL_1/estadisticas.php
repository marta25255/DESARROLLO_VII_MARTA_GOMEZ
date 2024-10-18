<?php

include "analisis_datos.php";

/*
git add PARCIALES/PARCIAL_1/ index.php PARCIALES/PARCIAL_1/ recursobiblioteca.php
git commit -m "Parcial1"
git push origin main

Problemas para subir el git o modificar algo 

cd PARCIALES/PARCIAL_1
git add .
git commit -m "archivo"
 git push origin main

*/


function calcular_media($datos){
        $media = array_sum($datos) / count($datos);
        return $media;
}

function calcular_mediana($datos){
    sort($datos);
    $numto = count($datos);
     if ($numto % 2 == 0) {
        $median = ($datos[$numto / 2 - 1] + $datos[$numto / 2]) / 2;
    } else {
        $median = $datos[($numto - 1) / 2];
     }
     return $median;
}

function calcular_moda($datos){
    $valores = array_count_values($datos); 
    rsort($valores); 
    return array_key_first($valores); 
}