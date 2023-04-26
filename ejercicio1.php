<?php
 $nombre = "Cris";
 $edad = "36";
 echo "Mi nombre es ".$nombre." y tengo ".$edad." años";

 echo "<br>";
 $precio = 20;
 $impuesto = 0.15;
 $precio_total = ($precio * $impuesto) + $precio;
 echo "El total de ".$precio." * ".$impuesto." es ".$precio_total;
 echo "<br>";

 $temperatura ="14";
 
if($temperatura < 0){
    echo "Hace un frio del caraho";
}elseif ($temperatura >= 0 && $temperatura < 15) {
    echo "Hace fresco";
}elseif ($temperatura >= 15 && $temperatura <25) {
    echo "Hace una mija de caló";
}elseif ($temperatura >= 25 && $temperatura < 36){
    echo "Hace la caló";
}else {
    echo"Vamó a la playa";
}



?>