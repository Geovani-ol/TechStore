<?php
session_start();
include('config.php');
  
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST["contraseña"];



  $sql="SELECT * FROM usuarios WHERE nombre = '$nombre' OR email = '$email'";
  $resultado=mysqli_query($conexion, $sql);
  
  $row=mysqli_num_rows($resultado);
  if($row == 1){
    header('Location:singup.php');
  }else{
    $_SESSION['email']=$email;
    $_SESSION['nombre']=$nombre;
    $reg = "INSERT INTO usuarios (nombre, email, contraseña, telefono) VALUES ('$nombre', '$email', '$contraseña', '$telefono')";
    mysqli_query($conexion, $reg);
    header('Location:index.php');
  }
?>