<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cinco</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 5</h4>
        <p class='text-center'>

        Implementar una función recursiva para calcular la potencia de dos enteros positivos pasados como
        parámetros.
        </p>
        <?php

            $m=8;
            $n=2;

            echo potencia($m,$n);

            function potencia(int $m,int $n){

                if($n==0){
                    return 1;

                }else if($n==1) {

                    return $m;

                }else if($n%2==0){

                    return potencia($m,$n/2)*potencia($m,$n/2);

                }else{

                    return potencia($m,($n-1)/2)*potencia($m,($n-1)/2)*$m;
                }
            }
   
         ?>
    </div>
</body>
</html>