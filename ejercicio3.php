<?php
    function fizzfuzz ()
    {
        $salida = "";
        for ($i=1; $i < 1001; $i++) { 
            if ($i % 3 == 0 && $i % 5 == 0)
            {
                $salida.= "FizzBuzz";
            }elseif ($i % 3 == 0){
                $salida.= "Fizz";
            }elseif ($i % 5 == 0){
                $salida .= "Buzz";
            }else{
                $salida .= $i;
            }
            $salida.="<br>";
        }
        return $salida;
    }

    echo fizzfuzz();
?>