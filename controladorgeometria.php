<?php
class Figuras{
    //Funcion area del cuadrado
    public function Cuadrado($base, $altura, $calcular){
        if($calcular == true){
            $area = $base * $altura;
            echo "El area del cuadrado es: " . $area;
        }else{
            echo "No cuadrado";
        }

    }
    //Funcion area del rectangulo
    public function Rectangulo($base, $altura, $calcular){
        if($calcular == true){
            $area = $base * $altura;
            echo "El area del rectangulo es: " . $area;
        }else{
            echo "No rectangulo";
        }

    }

}
