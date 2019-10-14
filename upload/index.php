<?php

$error = '';

if (isset($_POST['upload'])) {

  $name = $_FILES['file']['name'];
  $type = $_FILES['file'] ['type'];
  $size = $_FILES['file'] ['size'];
  $root = $_FILES['file'] ['tmp_name'];
  $destiny = "files/" . $name;
  $title = htmlspecialchars($_POST['title']);
  $description = htmlspecialchars($_POST['description']);



if (empty($title) && empty($name)){
    $error .= 'Are you kidding me? ';
}else if(empty($name)){
 $error .= 'Choose a PDF! ';
}else if(empty($title)){
  $error .= 'At least choose a title! ';
}else if (!empty($name) && $type != 'application/pdf') {
  $error .= 'This file is not a PDF. ';
}else if(empty($title) && $type != 'application/pdf' ){
  $error .= 'You forget the title and that this file is not a PDF!  ';
}else if($size > 8978294){
  $error .= 'This PDF is too big. ';
}else{
  try {
    $conexion = new PDO('mysql:host=localhost;dbname=ruhbox', 'root', '');
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}


if ($error == '') {
    if (copy($root,$destiny)) {
  $statement = $conexion->prepare('INSERT INTO files (id , title, description, size, filename, destiny) VALUES (null, :title, :description, :size, :filename, :destiny)');
   		$statement->execute(array(
        ':title' => $title,
        ':description' => $description,
   			':size' => $size,
        ':filename' => $name,
        ':destiny' => $destiny

   		));

$success = 'Your PDF have been published! ';
}


}


}


require 'views/index.view.php';
 ?>
