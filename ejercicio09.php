<!DOCTYPE html>
<html>
<body>
<?php
// Datos para la conexión con MySql
$servername = "localhost";
$username = "usuario";
$password = "12345";
$dbname = "usuario";
 
// Creamos la conexión con MySql
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
// Comprobamos la conexión
if (!$conn) {
    die("Error de conexión con MySql: " .mysqli_connect_error());
}
 
$sql = "SELECT id, firstname, lastname, email FROM contactos";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // Mostramos los datos de cada fila/registro
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}
// Cerramos la conexión con MySQL
mysqli_close($conn);
?>
</body>
</html>