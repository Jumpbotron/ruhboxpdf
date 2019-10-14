<?php

require 'requires/db.php';



$contents = $conexion->prepare(
"SELECT * FROM files");

$contents->execute();
$contents = $contents->fetchAll();


require 'views/index.view.php';

 ?>
