<!DOCTYPE html>
<html>
<body>
<?php
// Datos para la conexión con MySql
$servername = "localhost";
$username = "usuario";
$password = "12345";
$dbname = "usuario";
 
// Recogemos el "id" desde la URL
$id = $_GET["id"];
 
// Creamos la conexión con MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
// Comprobamos la conexión
if (!$conn) {
    die("Error de conexión con MySql: " .mysqli_connect_error());
}
 
$sql = "DELETE FROM contactos WHERE ID='$id'";
 
if (mysqli_query($conn, $sql)) {
    echo "Registro borrado";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Cerramos la conexión con MySQL
mysqli_close($conn);
?>
</body>
</html>