<?php
class Salarios{
    public function Incremento($Salario, $Porcentaje, $Calcular){
        if($Calcular == true){
            $incrementoSalario = $Salario * $Porcentaje;
            $salarioTotal = $Salario + $incrementoSalario;
            echo "Su nuevo salario es: " . $salarioTotal;

        }else{
            echo "Error al incrementar el salario";
        }
    }
}