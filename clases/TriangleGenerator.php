<?php

// CLASE INDEPENDIENTE QUE GENERA UN TRÍANGULO

class TriangleGenerator{

// MÉTODO ÚNICO

public static function generateTriangle(int $altura):string{
    // Altura negativa
    if ($altura <= 0){
        return " ";
    }

    // Dibujo 
    // Creo una variable triángulo vacía
    $triangulo = "";
    // Creo el bucle
    for($i=1; $i<=$altura; $i++){
        // Dibuja espacios necesarios de cada vuelta
        $espacios = str_repeat("&nbsp;", $altura-$i);
        //Los asteriscos
        $asteriscos = str_repeat("*", 2*$i-1);
        // Concatena con lo ya dibujado
        $triangulo.="<p>" . $espacios . $asteriscos . "</p>";

    }
    return $triangulo;


}





}
?>