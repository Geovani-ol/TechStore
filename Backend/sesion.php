<?php
  session_start();
    include('config.php');

  $email=$_POST['email'];
  $contraseña=$_POST['contraseña'];

  $sql="SELECT * FROM usuarios WHERE email = '$email' and contraseña = '$contraseña'";
  $result=mysqli_query($conexion, $sql);
  
  $row=mysqli_fetch_assoc($result);
  $nombre = $row['nombre'];

  $row=mysqli_num_rows($result);

  if($row == 1){
    $_SESSION['email']=$email;
    $_SESSION['nombre']=$nombre;
    header('Location:index.php');
  }else{
    header('Location:login.php');
  }
?>