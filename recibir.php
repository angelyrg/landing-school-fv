<?php
$conexion = mysqli_connect("localhost", "root", "", "francoisviet");

$process = true;


$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$ciclo = $_POST['ciclo'];
$nombre_archivo = $_FILES['voucher']['name'];
$guardado = $_FILES['voucher']['tmp_name'];

$extension_archivo = explode(".", $nombre_archivo);
$ext = $extension_archivo[1];

$sql = "INSERT INTO inscripcion (dni, nombres, apellidos, ciclo, celular, correo, extension)
VALUES ('$dni', '$nombres', '$apellidos', '$ciclo', '$celular', '$correo', '$ext');";


if (mysqli_query($conexion, $sql)) {
      $process = true;
} else {
  $process = false;
}

settype($dni, 'string');


if(!file_exists('intranet/vouchers')){
  mkdir('intranet/vouchers', 0777, true);
  if( file_exists('intranet/vouchers') ){
    if(move_uploaded_file($guardado, 'intranet/vouchers/'.$nombre_archivo )){
      rename ("intranet/vouchers/".$nombre_archivo, "intranet/vouchers/".$dni.".".$extension_archivo[1]);
      $process = true;
    }else{
      $process = false;
    }
  }
}else{
  if(move_uploaded_file($guardado, 'intranet/vouchers/'.$nombre_archivo )){
    rename ("intranet/vouchers/".$nombre_archivo, "intranet/vouchers/".$dni.".".$extension_archivo[1]);
    $process = true;
  }else{
    $process = false;
  }
}

if ($process == true){
  echo 1;
}else{
  echo 0;
}

mysqli_close($conexion);

//header("Location: inscripcion.php");

?>
