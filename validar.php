<?php
include('db.php');
$Nombre=$_POST['nombre'];
$Contra=$_POST['contraseña'];


$consulta="SELECT*FROM registro where Usuario='$Nombre' and contraseña='$Contra'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  session_start();
  $_SESSION["nombre"]=$_POST["contraseña"];
  echo "<script> alert('Bienvenido $Nombre');
  location.href = 'inicio.php';
  </script>";

}else{
  echo "<script> alert('Usuario Incorrecto');
  location.href = 'index.html';
  </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>