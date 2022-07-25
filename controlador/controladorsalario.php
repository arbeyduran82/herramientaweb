<?php
class Salarios{
    public function Incremento($salario, $perfil, $calcular){
        if($calcular == true){
            $incrementoSalario = ($salario * $perfil)/100;
            $salarioTotal = $salario + $incrementoSalario;
            echo "Su nuevo salario es: " . $salarioTotal;

        }else{
            echo "Error al incrementar el salario";
        }
    }
}