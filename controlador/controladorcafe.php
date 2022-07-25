<?php
    class Tarifas{
        public function calcularTiempo($horainicial, $horafinal, $calcular){
            if ($calcular == true) {
                //se definen dos objetos de tipo DateTime
                $hora1 = new DateTime($horainicial);
                $hora2 = new DateTime($horafinal);
                //se calcula la diferencia entre la hora inicial y final
                $resultado = $hora1->diff($hora2);  
                //se define el formato a mostrar 
                $formato = $resultado->format('%H:%I');
                //se separa los datos antes y despues de los dos puntos
                $horaspartes = explode(":", $formato); 
                //se hallan los minutos totales sumando las dos posiciones del array
                $minutosTotales = ($horaspartes[0] * 60) + $horaspartes[1];
                echo "Usted consuminio: " . $minutosTotales . " Minutos <br>";
                echo "el costo es: " ."$" .($minutosTotales * 25);
                

            }else{
                echo "Calcular no true";
            }

        }   
    }
?>