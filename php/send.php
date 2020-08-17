<?php
  include 'conexion.php';
  $descripcion = $_POST['Descripcion'];
  $email = $_POST['email'];

  $ins = $con -> query("INSERT INTO metalmig (id, descripcion, email) VALUES
  ('','$descripcion','$email')");

  if ($ins) {
    echo "guardo";
  }
  else {
    echo "no guardo";
  }
 ?>
