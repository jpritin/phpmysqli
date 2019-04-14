<!DOCTYPE html>
<html>
<body>
<?php
// Datos para la conexión con MySql
$servername = "localhost";
$username = "usuario";
$password = "12345";
$dbname = "usuario";
 
// Recogemos los datos del formulario “ejercicio07formulario.php”
$f = $_POST["first"];
$l = $_POST["last"];
$e = $_POST["email"];
 
// Mostramos los datos
echo "Nombre: $f<br>";
echo "Apellidos: $l<br>";
echo "Email: $e<br>";
 
// Creamos la conexión con MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
// Comprobamos la conexión
if (!$conn) {
    die("Error de conexión con MySql: " .mysqli_connect_error());
}
 
$sql = "INSERT INTO contactos(firstname, lastname, email)
VALUES ('$f', '$l', '$e')";
 
if (mysqli_query($conn, $sql)) {
    echo "Registro insertado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Cerramos la conexión con MySQL
mysqli_close($conn);
?>
</body>
</html>