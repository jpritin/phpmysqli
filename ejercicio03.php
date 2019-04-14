<!DOCTYPE html>
<html>
<body>
<?php
/*
Crea una página en php que muestre la tabla de multiplicar 
del número 5. Nota: Usa un bucle “for”.
*/
$num = 5;
for($x = 1; $x <= 10; $x++){
    echo $num;
    echo " x ";
    echo $x;
    echo " = ";    
    echo $num*$x;
    echo "<br>";
}
?>
</body>
</html>