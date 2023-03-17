<?php
    //* Variables y Constantes *
    //Crea una variable de nomre "variable sin valor" declarada sin valor.
    $variableSinValor;

    //Crea dos variables con nombres booleano1 y booleano2 con valores booleanos.
    $booleano1 = true;
    $booleano2 = false;

    //Crea una constante con el número PI.
    const PI = 3.1415;

    //Crea una variable llamada tau con el valor de PI multiplicado por dos.
    $tau = PI * 2 ;

    //Crea una constante de nombre "mi nombre" con tu nombre.
    const MI_NOMBRE = "Adán";

    //Crea una constante de nombre "mi num fav" con valor numérico.
    const MI_NUM_FAV = 4;

    //* Booleanos *
    //Crear una variable cuya valor sea la comparación entre booleano1 and booleano2.
    $comp = $booleano1 == $booleano2;

    //Crea una variable cuyo valor sea la comparación booleana de no boleano1.
    $booleanont1 = !$booleano1;

    //Crea variable cuyo valor sea la compración booleana de (booleano1 or booleano2) and (booleano1 or (no booleano1 and no booleano2)).
    $comp2 = ($booleano1 or $booleano2) and ($booleano1 or (!$booleano1 and  !$booleano2));

    //Crear variable cuyo valor sea la comparación booleano1 or booleano2.
    $comp3 = $booleano1 or $booleano2;

    //Crear una variable cuyo valor sea la compración booleano (booleano1 and (tau/2 sea igual a PO) or (variableNumerica mayor o igual a miNumFav))
    $variableNumerica = 3;
    $comp4 = ($booleano1 and ($tau/2 == PI) or ($variableNumerica >= MI_NUM_FAV));

    //Crea una variable cuya valor sea la comparación booleana 6 no es estrictamente igual que 9.
    $comp5 = 6!== 9;

    //Crear una variable cuyo valor sea la comparación booleana variableNumerica es positivo o menor que (miNumFav tau)*.
    $comp6 = $variableNumerica >= 0 or $variableNumerica < MI_NUM_FAV * $tau; 

    //* Operadores *
    //Crea una variable con valor 2, después súmale 5.
    $var1 = 2;
    $var1 += 5;

    //Crea una variable cuyo valor sea la resta de miNumFav y una variable de valor numérico.
    $var2 = MI_NUM_FAV - $var1;

    //Crea una variable cuyo valor sea la suma de miNumFav y una variable de valor numérico.
    $var3 = MI_NUM_FAV + $var1;

    //Crea una variable cuyo valor sea la multiplicación de miNumFav y una variable de valor numérico.
    $var4 = MI_NUM_FAV * $var1;

    //Crea una variable cuyo valor sea la división de miNumFav y una variable de valor mumérico igual a 3.
    $var5 = MI_NUM_FAV / 3;

    //Crea una variable cuyo valor sea el resto de la división de 143 dividido entre 140.
    $var6 = 143 % 140;

    //Crea una variable que cuyo valor sea el resto de la división de 25 entre 5.
    $var7 = 25 % 5;

    //* Bucles *
    //Crear variable contarHasta10_2 con valor 0 e incrementar su valor con un bucle for hasta que se verifique que contarHasta10_2 === 10.

    $contarHasta10_2 = 0;

    while($contarHasta10_2 < 10)
    {
        $contarHasta10_2++;
        echo $contarHasta10_2 . "<br>";
    }

    //Crear las variables postI y postJ con valor 0 a continuación crea un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de postI el valor de postJ++.
    $postI = 0; $postJ = 0;
    for ($i=0; $i < 11; $i++) { 
        $postJ++;
        $postI+= $postJ;

        echo "valor de postI:$postI".", valor de postJ:$postJ <br>";
    }

    //Crear la variable sumaPares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración 
    //es par se deberá sumar a sumaPares el número de la iteración actual (i).

    $sumaPares = 0;
    for ($i=0; $i < 10; $i++) { 
        if ($i % 2 == 0) {
            $sumaPares += $i;
            echo "$sumaPares <br>";
        }
    }

    //Crear variable contarHasta10 con valor 0 e incrementar su valor con un bucle while hasta que se verifique que contarHasta10 === 10.

    $contarHasta10 = 0;
    while(true)
    {
        $contarHasta10++;
        echo $contarHasta10 . "<br>";
        if ($contarHasta10 === 10) break;
    }

    //Crear las variables preI y preJ con valor 0 a continuación cree un bucle que itere 11 veces. 
    //En cada iteración se deberá sumar al valor de preI el valor de ++preJ.
    $preI = 0; $preJ = 0;
    for ($i=0; $i < 11; $i++) { 
        $preJ++;
        $preI+= $preJ;

        echo "valor de preI:$preI".", valor de preJ:$preJ <br>";
    }

    //Crear la variable sumaImpares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) 
    //si la iteración es impar se deberá sumar a sumaImpares el número de la iteración actual (i).
    $sumaImpares = 0;
    for ($i=0; $i < 10; $i++) { 
        if ($i % 2 == 1){
            $sumaImpares += $i;
            echo $sumaImpares . "<br>";
        }
    }


?>