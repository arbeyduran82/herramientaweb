<?php
$Arauca = 47000;
$Bogota = 22000;
$Bucaramanga = 34000;
$Duitama = 2000;
$Paipa = 3000 ;
$Saravena = 40000;
$Tame = 38000;
$Tunja = 6000;

class Facturas{
    public function costoPasaje($numpasajeros, $ruta, $calcular){
        if($calcular == true){
            $valorTotal = $numpasajeros * $ruta;
            echo "Total: " . $valorTotal;

        }else{
            echo "Error al calculalar el cobro";
        }
      }
    }