<?php
  include('../Backend/config.php');
  session_start();
  if(isset($_SESSION['email'])){
    header('Location:../index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Iconos de Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Icono -->
    <link rel="Icon" href="../img/Logotipo.png">
    <title>TechStore</title>
</head>
<body class="bg-dark bg-gradient">
    
    <section class="vh-100">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-5">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="card-body p-4 p-lg-3 text-black">

                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <a href="index.php">
                                            <img src="../img/Logotipo.png" alt="Logotipo" width="50" height="50" class="m-2"/>
                                    </a>
                                    <a class="text-decoration-none text-dark" href="index.php">
                                            <span class="h1 fw-bold">TechStore</span>
                                    </a>
                                </div>

                                <h5 class="fw-normal my-5" style="letter-spacing: 1px;">Registre su cuenta</h5>
    
                                <form action="../Backend/usuarios.php" method="POST" class="row g-3 ">
                    
                                    <div class="col-md-6">
                                        <label class="form-label" for="form2Example17">Nombre</label>
                                        <input name="nombre" type="text" id="form2Example17" class="form-control" required />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="form2Example27">Telefono</label>
                                        <input name="telefono" type="tel" id="form2Example2" class="form-control" required />
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <label class="form-label" for="form2Example17">Correo Electronico</label>
                                        <input name="email" type="email" id="form2Example17" class="form-control" required />
                                    </div>
                    
                                    <div class="col-md-4">
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                        <input name="contraseña" type="password" id="form2Example27" class="form-control" required />
                                    </div>
                    
                                    <div class="my-4 d-flex justify-content-center">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Registrarse</button>
                                    </div>

                                    <p class="m-4 pb-lg-2" style="color: #393f81;">Ya tienes cuenta? <a href="login.php" style="color: #393f81;">Iniciar secion aquí</a></p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>