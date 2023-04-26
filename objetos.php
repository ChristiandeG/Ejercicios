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
            // CREACION OBJETOS FUNCIONES
            class Coche{
                public $marca;
                public $anno;

                function __construct($marca, $anno){
                    $this->marca = $marca;
                    $this->anno = $anno;

                }
                public function mostrar(){
                    echo "Mi coche es ".$this->marca." del año ".$this->anno;
                }
            }
            $coche1 = new Coche("audi", 2009);
            $coche2 = new Coche("renault", 2006);

         

            $coche1->mostrar();
            echo "<br>";
            $coche2->mostrar();
            echo "<br>";

            //CREACION OBJETOS
           
            class Animal{
                public $nombre;
                public $sonido;
                public $genero;

                function __construct($nombre, $sonido, $genero){
                    $this->nombre = $nombre;
                    $this->sonido = $sonido;
                    $this->genero = $genero;

                }
                public function hablar(){
                    if($this->genero == "macho"){
                        echo "El ".$this->nombre." por la mañana hace ".$this->sonido;
                    }else{
                        echo "La ".$this->nombre." por la mañana hace ".$this->sonido;   
                    }
                }
            }
            $animal1 = new Animal("perro", "guau", "macho");
            $animal2 = new Animal("gato", "miau", "macho");
            $animal3 = new Animal("ornitorrinco", "sniff", "hembra");

         

            $animal1->hablar();
            echo "<br>";
            $animal2->hablar();
            echo "<br>";
            $animal3->hablar();
            echo "<br>";
            ?>
        </p>
    </h1>
</body>
</html>