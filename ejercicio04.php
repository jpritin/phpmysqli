<!DOCTYPE html>
<html>
<body>
<?php
/*
Crea una página en php que muestre el texto “Hello” encerrado 
entre etiquetas “h1” hasta “h6”.
*/
$txt = "Hello";
for($x = 1; $x <= 6; $x++){
    echo "<h$x>$txt</h$x>";
}
?>
</body>
</html>