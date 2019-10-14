<?php 
try {
  $conexion = new PDO('mysql:host=localhost;dbname=ruhbox', 'root', '');
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
 ?>
