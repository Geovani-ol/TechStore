<?php
include ('config.php');

if (isset($_POST['search_term'])) {
  $search_term = $_POST['search_term'];

  // Conexión a la base de datos y consulta para buscar resultados
  $sql = "SELECT * FROM productos WHERE nombre LIKE '$search_term%'";
  $resultado = $conexion->query($sql);

  // Si hay resultados, mostrarlos en la página
  if ($resultado->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Muestra los resultados como desees
      echo '<div onclick="fillSearchBox(\'' . $row['nombre'] . '\')">' . $row['nombre'] . '</div>';
      echo "<br>";
    }
  }
  else {
    echo "No se encontraron resultados";
  }
}
?>