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
        <p> Esto es un párrafo
            <?php
            $saludar = false;

            if($saludar == true){
                echo "hola";
            } else{
                echo "adios";
            }
            
        
            

            function restar($num1, $num2) {
                $resta = $num1 - $num2;
                return $resta;
            }
            
            $resultado = restar(4,3);

            echo $resultado;

            echo "<br>";


            function decir_frase($objeto="telefono", $signo_zodiaco="sagitario"){  
                $imprimir = "Tengo un ".$objeto." y soy ".$signo_zodiaco;
                return $imprimir;
            }

            echo decir_frase();
            echo "<br>";
            echo decir_frase("bolsillo");
            echo "<br>";
            echo decir_frase(objeto:"bolsillo");
            echo "<br>";



            $alumnos = ["al1", "al2", "al3", "al4", "al5"];
            $posicion_array = 0;

            while($posicion_array <5){
                echo $alumnos[$posicion_array]." ha venido a clase";
                echo "<br>";
                $posicion_array++;
            }

            for($posicion_array = 0; $posicion_array <5; $posicion_array++){
                echo $alumnos[$posicion_array]." ha venido a clase";
                echo "<br>";
            }
            ?>

        </p>
    </h1>
</body>
</html>