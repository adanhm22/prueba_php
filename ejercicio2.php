<?php
    //* Arrays *
    //Crear variable de nombre arrayVacio cuyo valor sea un array vacío.
    $arrayVacio = [];

    //Crear variable de nombre arrayNumeros declarada con un array de números del 0 al 9 (0, 1, 2...).
    $arrayNumeros = [1,2,3,4,5,6,7,8,9];

    //Crear variable de nombre arrayNumerosPares declarada con un array con los números pares del 0 al 9 (considerando al 0 par).
    $arrayNumerosPares = [0,2,4,6,8];

    //Crear variable de nombre arrayBidimensional declarada con valor array [[0, 1, 2], ['a', 'b', 'c']].
    $arrayBidimensional = [[0, 1, 2], ['a', 'b', 'c']];

    //Crear variable de nombre arrayNumerosNeg declarada con un array de números del 0 al -9 (0, -1, -2...).
    $arrayNumerosNeg = [0,-1,-2,-3,-4,-5,-6,-7,-8,-9];

    //Crear variable cuyo valor sea un array asociativo con las clases-valores: nombre-tu nombre, apellido- tu apellido y edad- tu edad.
    $arrayAsociativo = [
        "nombre" => "Adán",
        "apellido" => "Heredia",
        "edad" => 26
    ];

    //Crear variable de nombre loGuardoTodo declarada con valor array con valores 'hola', 'que', 23, 42.33 y 'tal'.
    $loGuardoTodo = ['hola', 'que', 23, 42.33 , 'tal'];

    //Crear variable de nombre arrayDeArrays declarada con valor array: [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']].
    $arrayDeArrays = [[756, 'nombre'], [225, 'apellido'], [298, 'direccion']];

    //* Funciones *
    //Crea la función suma que acepte como argumento dos números y devuelva el resultado de su suma.
    function suma ($a,$b) {return $a + $b;}

    //Crea la función potenciacion que acepte como argumento dos números y devuelva el resultado de elevar el primero(a) al segundo(b) (a^b).
    function potenciacion ($a,$b) {return $a ^ $b;}

    echo potenciacion(2,5);

    //Crea la función separarPalabras que acepte como argumento un string y devuelva un array de palabras 'hola mundo' => [hola, mundo].

    function separarPalabras ($palabras) {
        $retorno = [];
        $temporal = "";
        for ($i=0; $i < strlen($palabras); $i++) { 
            if ($palabras[$i] == " "){
                array_push($retorno,$temporal);
                $temporal = "";
            }else $temporal .= $palabras[$i];
        }
        array_push($retorno,$temporal);
        return $retorno;
    }

    var_dump(separarPalabras("Hola mundo"));

    //Crea la función repetirString que acepte como argumento un string y un número y 
    //devuelva un string que sea el resultado de concatenar el primer string el número dado de veces.

    function repetirString ($palabra,$numero){
        $retorno = "";
        for ($i=0; $i < $numero; $i++) $retorno .= $palabra;
        return $retorno;
    }

    //Crea la función esPrimo que acepte como argumento un número y devuelva true si es primo y false si no lo es.
    function esPrimo ($numero){
        for ($i=$numero - 1; $i >= 2 ; $i--) {
            
            if ($i % $numero == 0){
                return false;
            } 
        }
        return true;
    }

    var_dump(esPrimo(13));
    //no salio
    //Crea la función multiplicacion que acepte como argumento dos números y devuelva el resultado de su multiplicación.
    function multiplicacion ($a,$b) {return $a * $b;}

    //Crea la función división que acepte como argumento dos números y devuelva el resultado de su división.
    function division ($a,$b) {return $a / $b;}

    //Crea la función esPar que acepte como argumento un número y devuelva true si es par y false si es impar.
    function esPar ($a) {return $a % 2 == 0;}

    //Crea el array arrayFunciones que tenga como valor las funciones: suma, resta y multiplicación 
    //(todas aceptan 2 números como argumento y devuelve el resultado de su operación).
    $arrayFunciones = [
        fn($a,$b) => $a+$b, //suma, no se como añadir funciones ya hechas
        fn($a,$b) => $a-$b, //resta
        fn($a,$b) => $a*$b
    ];

    //* Mezclando arrays y funciones *
    //Crear la función ordenarArray que acepta como argumento un array de números y devuelva un array ordenado de menor a mayor.

    function ordenarArray ($numeros) {
        array_multisort($numeros);
        return $numeros;
    }
    $numeros2 = [12,15,14,16,42,11,10];
    var_dump(ordenarArray($numeros2));
    echo "<br>";
    //Crear la función obtenerPares que acepta como argumento un array de números y devuelva un array con los elementos pares.
    function obtenerPares ($numeros) {
        $pares = [];
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) array_push($pares,$numero);
        }
        return $pares;
    }

    var_dump(obtenerPares($numeros2));

    //Crear la función pintarArray que acepte como argumento un array y 
    //devuelva una cadena de texto Array entrada: [0, 1, 2] String salida: '[0, 1, 2]'.

    function pintarArray ($array){
        $salida = "[";
        for ($i=0; $i < sizeof($array); $i++) { 
            $salida .= $array[$i];
            if ($i != sizeof($array) -1){
                $salida .= ", ";
            }else {
                $salida .= "]";
            }
        }
        return $salida;
    }

    echo "<br> ". pintarArray($numeros2) . "<br>";

    //Crear la función arrayMapi que acepte como argumento un Array 
    //y una función y devuelva un array en el que se haya aplicado la función a cada elemento del array.

    //este no tiene ningun sentido



    //Crear la función eliminarDuplicados que acepte como argumento un array y devuelva un array en el que se hayan eliminado los duplicados.
    function eliminarDuplicados ($array){
        $sinDuples = [$array[0]];
        $dupla = false;
        for ($i=1; $i < sizeof($array); $i++) { 
            for ($j=0; $j < sizeof($sinDuples); $j++) { 
                if ($array[$i] == $sinDuples[$j]){
                    $dupla = true;
                    break;
                }
            }
            if ($dupla == false) array_push($sinDuples,$array[$i]);
            $dupla = false;
        }
        return $sinDuples;
    }
    

    echo "<br>";
    var_dump(eliminarDuplicados([12,15,13,10,15,16,14,10,12,20]));

    //Crear la función ordenarArray2 que acepta como argumento un array de números y devuelva un array ordenado de mayor a menor.
    function ordenarArray2 ($array){
        $longitud = count ($array);
        $completado = false;
        $contador = 0;
        $x = 0; $y = 1;
        while (!$completado){
            if ($array[$x] > $array[$y]){

                $temporal = $array[$x];
                $array[$x] = $array[$y];
                $array[$y] = $temporal;
                $x++; $y++;
                $contador = 0;
            }else{
                $x++; $y++;
                $contador++;
            }
            if ($y >= $longitud){
                $x = 0; $y = 1;
                if ($contador +1 >= $longitud) $completado = true;
                $contador = 0;
            }
        }
        return $array;
    }

    echo "<br>";

    var_dump(ordenarArray2([12,52,32,10,14,25]));
    echo "<br>";

    //Crear la función obtenerImpares que acepta como argumento un array de números y devuelva un array con los elementos impares.
    function obtenerImpares ($array){
        $impares = [];
        foreach ($array as $numero) {
            if ($numero % 2 == 1) array_push($pares,$numero);
        }
        return $impares;
    }

    //Crear la función sumarArray que acepte como argumento un array numérico y devuelva la suma de
    //los números en el array Array: [1, 2, 3] resultado: 6.
    function sumaArray ($array){
        $numero = 0;
        for ($i=0; $i < sizeof($array); $i++) { 
            $numero += $array[$i];
        }
        return $numero;
    }

    echo "suma de arrays: " . sumaArray([1, 2, 3]) . "<br>";
    //Crear la función multiplicarArray que acepte como argumento un array numérico y 
    //devuelva la multiplicación de los números en el array Array: [2, 3, 4] resultado: 24.
    function multiplicarArray ($array){
        $numero = 1;
        for ($i=0; $i < sizeof($array); $i++) { 
            $numero *= $array[$i];
        }
        return $numero;
    }

    echo "multiplicacion de arrays: " . multiplicarArray([2, 3, 4]) . "<br>";


?>