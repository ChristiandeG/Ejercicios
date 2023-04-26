<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <p>
            <?php
            // Nivel básico
            // Ejercicio 1
            echo "Hola Mundo";

        echo "<br>";    
            // Ejercicio 2
            function crear_area($radio){
                $area = pi()*$radio**2;
                return round ($area, 2);
            }

            echo crear_area(5);

        echo "<br>"; 
            // Ejercicio 3 con while
            function sacar_factorial($num){
                $i = 1;
                $resultado = 1;
                while($i <= $num){
                    $resultado = $i * $resultado;
                    $i++;
                }
                return $resultado;
            }
            echo sacar_factorial(5);

        echo "<br>";    
            // Nivel intermedio
            // Ejercicio 4

            $numeros = [1,2,3,6,5];
            $sumar = 0;
            $totalsumar = 0;

            for ($i = 0; $i < count($numeros); $i++){
                $numeros[$i];
            }
            while($sumar < count($numeros)){
                $totalsumar = $numeros[$sumar] + $totalsumar;
                $sumar++;
            }
            $promedio = $totalsumar / $sumar;
            echo "La suma total es ".$totalsumar." y su promedio es ".$promedio;

            echo "<br>";
            // Ejercicio 5
            $nument =[1,3,3,3,5]; 
            print_r(array_unique($nument));
           

            // Ejercicio 6
            $strings =["z","b","u","g","h"]; 
            sort($strings);
            print_r($strings);
            ?>
        </p>
    </h1>
</body>
</html>