<!DOCTYPE html>
<html>
<body>
<?php
/*     
Tomamos el número de “ejercicio05formulario.php” y mostramos la tabla 
de multiplicar de dicho número.
*/
$num = $_POST["numero"];
echo "El número introducido es $num<br>";
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