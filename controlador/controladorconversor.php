<?php
class Conversiones{
    //Funcion area del cuadrado
    public function convCentimetros($metro, $calcular){
        if($calcular == true){
            $resCentimetros = $metro * 100;
            echo "El resultado es : " . $resCentimetros;
        }else{
            echo "No cuadrado";
        }
    }

    //Coversor a kilometros
    public function convKilometros($metro, $calcular){
        if($calcular == true){
            $resKilometros = $metro / 1000;
            echo "El resultado es : " . $resKilometros;
        }else{
            echo "No cuadrado";
        }
    }
    //Conversor a pies
    public function convPies($metro, $calcular){
        if($calcular == true){
            $resPies = $metro / 0.3048;
            echo "El resultado es : " . $resPies;
        }else{
            echo "No cuadrado";
        }
    }
}
