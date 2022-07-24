<?php

$Salario = $_POST["txtsalario"];
$Perfil = $_POST["selperfil"];
$Incremento = ($Salario * $Perfil)/100;
$Resultado = $Incremento + $Salario;


//----------------------------------------
/*
class calcularIncremento{
    public $Salario;
    public $Perfil;


}*/
//-----------------------------------------

class mostrarIncremento{
    public $Resultado;

    //Constructor
    function __construct($Resultado){
        $this->Resultado = $Resultado;
    }
    //Metodos get y set
    function get_Resultado(){
        return $this->Resultado;
    }
    function set_Resultado($Resultado){
        $this->Resultado = $Resultado;
    }
}

// se crea el objeto Incremento
$Incremento = new mostrarIncremento(null);

//se pasa la variable $Resultado por medio del objeto y el setter
$Incremento->set_Resultado($Resultado);

//imprime el resultado
echo $Incremento->get_Resultado();


