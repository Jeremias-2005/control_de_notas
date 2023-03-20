<?php
$host = "localhost";
$port = "5432";
$dbname = "notas";
$user = "notasadmin";
$password = "incasnotas";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Error de conexión: " . pg_last_error());

?>

<?php
$query = "SELECT * FROM tbl_prueba";
$result = pg_query($conn, $query) or die("Error en la consulta: " . pg_last_error());
?>

<table border="3">
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
  </tr>
  <?php
  while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['usuario'] . "</td>";
    echo "<td>" . $row['contrasena'] . "</td>";
    echo "<td>" . $row['padre'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>

<?php
pg_close($conn);
?>

