<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
 
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
 
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
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
    // Cabecera de la tabla
    echo "<table>";
    echo "  <tr>";
    echo "  <th>Nombre</th>";
    echo "  <th>Apellidos</th>";
    echo "  <th>E-mail</th>";
    echo "  </tr>";
 
    while($row = mysqli_fetch_assoc($result)) {
           // Datos de cada fila/registro
          echo "<tr>";
              echo "<td>".$row['firstname']."</td>";
              echo "<td>".$row['lastname']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "</tr>";
    }
    // Fin de la tabla
    echo "</table>";
} else {
    echo "0 resultados";
}
// Cerramos la conexión con MySQL
mysqli_close($conn);
?>
</body>
</html>