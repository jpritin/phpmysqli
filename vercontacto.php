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
 
$sql = "SELECT  id, firstname, lastname, email, reg_date FROM contactos WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
 
 
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    // Datos del registro
    echo "Id: ".$row['id']."<br>";    
    echo "Nombre: ".$row['firstname']."<br>";
    echo "Apellidos: ".$row['lastname']."<br>";
    echo "Email: ".$row['email']."<br>";
    echo "Fecha: ".$row['reg_date']."<br>";    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// Cerramos la conexión con MySQL
mysqli_close($conn);
?>
</body>
</html>