<?php
require("db.php");
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Contra = $_POST['Contra'];



$insert=  "INSERT INTO registro (Usuario, Email, Contraseña) VALUES ('$Nombre', '$Correo', '$Contra')";

$resultado = mysqli_query($conexion, $insert);

if($resultado){
  
    echo "<script> alert('Usuario Registrado Exitosamente');
    location.href = 'index.html';
    </script>";
}else{
    echo "<script> alert('Usuario no Registrado ¡Error!');
    location.href = 'registro.php';
    </script>";
}
mysqli_close($conection);
?>
