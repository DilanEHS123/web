<?php
$edad =18;

if($edad >=18){
  echo "Eres mayor de edad.";
}else{
    echo "Eres menor de edad.";
}


$dia = "Lunes";

switch ($dia) {
    case "Lunes":
        echo "Hoy es Lunes<br>";
        break;
    case "Martes":
        echo "Hoy es Martes<br>";
        break;
    default:
        echo "Hoy no es Lunes ni Martes<br>";
}

// for
for ($i = 0; $i < 5; $i++) {
    echo "Número: $i <br>";
}

// foreach
$colores = array("Rojo", "Verde", "Azul");

foreach ($colores as $color) {
    echo "Color: $color <br>";
}
?>
