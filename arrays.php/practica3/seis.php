<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Seis</title>
</head>
<body>
    <div class= "container m-5" align ="center">
        <h4 class='text-center'>Ejercicio 6</h4>
        <p class='text-center'>
        Realizar un dado virtual en PHP mediante el uso de arrays. Cada vez que se<br>
        refresque la pantalla, deberá verse un número distinto al azar entre 1 y 6<br>
        </p>
        
        <?php
            
            $dado=[
                "uno",
                "dos",
                "tres",
                "cuatro",
                "cinco",
                "seis"
            ];
            

            shuffle($dado);
            print($dado[0]);
        

        ?>
    </div>
</body>
</html>