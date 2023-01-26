<?php

include_once("conexion.php");

$id = $_POST['ciclo'];

$sql = mysqli_query($conexion, "SELECT * FROM ciclos WHERE id='$id'");
while ($row = mysqli_fetch_array($sql)) {
  $costo = $row['precio'];
}

echo $costo;

 ?>
