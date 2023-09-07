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
    <link rel="Icon" href="img/Logotipo.png">
    <title>TechStore</title>

    <!-- Diseño del buscador -->
    <style>
      #search_results {
      position: absolute;
      top: 1000px;
      left: 0;
      z-index: 999;
      width: 100%;
      max-height: 200px;
      overflow-y: auto;
      background-color: #fff;
      border: 1px solid #ccc;
      border-top: none;
    }
    
    #search_results div {
      padding: 10px;
      cursor: pointer;
    }
    
    #search_results div:hover, #search_results div.selected {
      background-color: #f2f2f2;
    }
    </style>
</head>
<body>

    <!-- NavBar -->

    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container border-bottom border-dark align-items-md-center">
            <div class="navbar-brand col-4 d-flex align-items-center">
                <a href="Templates/Administracion/Administracion.php" class="me-2 text-decoration-none">
                    <img src="img/Logotipo.png" alt="Logotipo" width="40" height="40">
                </a>
                <a class="text-body-secondary fw-semibold text-decoration-none">
                    TECHSTORE
                </a>
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mb-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 sm-col-12 md-col-6 lg-col-6">
                <li class="nav-item">
                    <a class="nav-link btn" href="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        MOVILE
                    </a>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-1 border-primary">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        MOVILE
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="list-group list-group-flush col-3 border-end">
                                            <a href="Templates/Productos/Movile/Smartphones.php" class="list-group-item list-group-item-action border-0">Smartphones</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Tablets</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Accesorios</a>
                                        </div>
                                        <div class="list-group col-9">
                                            <div class="row row-cols-sm-2 row-cols-md-2 row-cols-lg-2 g-2 p-5">
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-center">
                                                            <a href="#">
                                                                <img src="Templates/Productos/movile/img-smartphones/P60-Pro.png" class="card-img-top" alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">P60 Pro</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <div class="card-header bg-white border-bottom-0 d-flex align-items-center justify-content-center">
                                                            <a href="#">
                                                                <img src="Templates/Productos/movile/img-smartphones/iPhone-14-Pro-Max.png" class="card-img-top" alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">iPhone 14 Pro Max</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="#exampleModal2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        PC
                    </a>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-1 border-primary">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel2">
                                        PC
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="list-group list-group-flush col-3 border-end">
                                            <a href="#" class="list-group-item list-group-item-action border-0">Laptops</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Monitores</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Escritorios</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Accesorios</a>
                                        </div>
                                        <div class="list-group col-9">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="#exampleModal3" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        WEARABLES
                    </a>
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-1 border-primary">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel3">
                                        WEARABLES
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="list-group list-group-flush col-3 border-end">
                                            <a href="#" class="list-group-item list-group-item-action border-0">Watch</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Band</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Accesorios</a>
                                        </div>
                                        <div class="list-group col-9">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn" href="#exampleModal4" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        AUDIO
                    </a>
                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header border-bottom-1 border-primary">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel4">
                                        AUDIO
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="list-group list-group-flush col-3 border-end">
                                            <a href="#" class="list-group-item list-group-item-action border-0">Audifonos</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Bocinas</a>
                                            <a href="#" class="list-group-item list-group-item-action border-0">Accesorios</a>
                                        </div>
                                        <div class="list-group col-9">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="d-flex align-items-center sm-col-12 md-col-4 lg-col-4 my-3" role="search">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <span class="input-group-text"><i class='bx bx-search-alt-2 bx-sm'></i></span>
                </div>
            </form>
            <div class="navbar-nav dropdown my-1">
                <li class="nav-item d-flex justify-content-center">
                    <i class='bx bx-shopping-bag bx-sm dropdown-toggle md-active d-none d-lg-block' data-bs-toggle="dropdown" data-bs-dusplay="static" role="botton" aria-expanded="true"></i>
                    <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-secundari">
                        <li><span class="dropdown-item-text"><?php echo "Bienvenido " . $_SESSION['nombre'] . ""; ?></span></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Pedidos<i class='bx bxs-chevron-right'></i></a></li>
                        <li><a class="dropdown-item" href="#">Tus Selecciones<i class='bx bxs-chevron-right'></i></a></li>
                    </ul>

                    <div class="container col-12 row input-group d-lg-none">
                        <div class="col-2 row-2 input-group-text item-center">
                            <i class='bx bx-shopping-bag bx-lg'></i>
                        </div>
                        <div class="col-10 row border-end-1 input-group-text">
                            <div class="text-center me-auto">
                                <span><?php echo "Bienvenido " . $_SESSION['nombre'] . ""; ?></span>
                            </div>
                            <div class="row border-top">
                                <span class="col"><a class="dropdown-item" href="#">Carrito<i class='bx bxs-chevron-right'></i></a></span>
                                <span class="col"><a class="dropdown-item" href="#">Tus Pedidos<i class='bx bxs-chevron-right'></i></a></span>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="navbar-nav dropdown my-1">
                <li class="nav-item d-flex justify-content-center">
                    <i class='bx bxs-user-circle bx-sm dropdown-toggle md-active d-none d-lg-block' data-bs-toggle="dropdown" data-bs-dusplay="static" role="botton" aria-expanded="true"></i>
                    <ul class="dropdown-menu dropdown-menu-lg-end dropdown-menu-secundari">
                        <li><span class="dropdown-item-text"><?php echo "Bienvenido " . $_SESSION['nombre'] . ""; ?></span></li>
                        <li><hr class="dropdown-divider"></li>
                        <?php if(!isset($_SESSION['email'])){ ?>
                            <li><a class="dropdown-item" href="Templates/singup.php">Registrarse<i class='bx bxs-chevron-right'></i></a></li>
                            <li><a class="dropdown-item" href="Templates/login.php">Iniciar Sesion<i class='bx bxs-chevron-right'></i></a></li>
                        <?php } ?>
                        <?php if(isset($_SESSION['email'])){ ?>
                            <li><a class="dropdown-item" href="Backend/logout.php">Cerrar Sesion<i class='bx bxs-chevron-right'></i></a></li>
                        <?php } ?>
                    </ul>

                    <div class="container col-12 row input-group d-lg-none">
                        <div class="col-2 row-2 input-group-text item-center">
                            <i class='bx bxs-user-circle bx-lg'></i>
                        </div>
                        <div class="col-10 row border-end-1 input-group-text">
                            <div class="text-center me-auto">
                                <span class="dropdown-item-text"><?php echo "Bienvenido " . $_SESSION['nombre'] . ""; ?></span>
                            </div>
                            <div class="row border-top">
                                <?php if(!isset($_SESSION['email'])){ ?>
                                    <span class="col"><a class="dropdown-item" href="Templates/singup.php">Registrarse<i class='bx bxs-chevron-right'></i></a></span>
                                    <span class="col"><a class="dropdown-item" href="Templates/login.php">Iniciar Sesion<i class='bx bxs-chevron-right'></i></a></span>
                                <?php } ?>
                                <?php if(isset($_SESSION['email'])){ ?>
                                    <span class="col"><a class="dropdown-item" href="Backend/logout.php">Cerrar Sesion<i class='bx bxs-chevron-right'></i></a></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
          </div>
        </div>
    </nav>

    <!-- Contenedor -->

    <div class="container">

        <!-- Carrusel -->

        <div id="carouselExampleAutoplaying" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="index.html">
                    <img src="img/Carrusel-De-Productos.png" class="img-fluid d-block md-w-50" alt="...">
                </a>
              </div>
              <div class="carousel-item">
                <a href="index.html">
                    <img src="img/Carrusel-De-Productos.png" class="img-fluid d-block md-w-50" alt="...">
                </a>
              </div>
              <div class="carousel-item">
                <a href="index.html">
                    <img src="img/Carrusel-De-Productos.png" class="img-fluid d-block md-w-50" alt="...">
                </a>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="" aria-hidden="true"><i class='bx bxs-chevron-left bx-lg' style="color:#000"></i></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="" aria-hidden="true"><i class='bx bxs-chevron-right bx-lg' style="color:#000"></i></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Grupo de cartas -->

        <div class="row row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3 my-5">
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Tablets/img-tablets/Galaxy-Tab-S8-Ultra.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Galaxy Tab S8 Ultra</h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Movile/img-smartphones/Galaxy-Z-Fold-4.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Galaxy Z Fold 4<h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Tablets/img-tablets/iPad-Pro.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">iPad Pro</h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Movile/img-smartphones/iPhone-14-Pro-Max.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">iPhone 14 Pro Max</h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Movile/img-smartphones/Mate-50-Pro.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Mate 50 Pro</h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-header bg-white border-bottom-0 h-100 d-flex align-items-center justify-content-center">
                    <a href="#">
                        <img src="Templates/Productos/Tablets/img-tablets/MatePad-Pro.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">MatePad Pro</h5>
                </div>
                <div class="card-footer text-center d-grid gap-2 sm-col-12 md-col-12 d-lg-block bg-white border-top-0">
                    <a href="#" class="btn btn-primary mb-lg-2">Comprar</a>
                    <a href="#" class="btn btn-secondary mb-lg-2">Carrito</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Buscador -->
    <script>
        $(document).ready(function() {
          var timeout;
          $('#search_term').keyup(function() {
            var search_term = $(this).val();
            if (search_term != '') {
              $.ajax({
                url: 'search.php',
                method: 'post',
                data: {search_term: search_term},
                success: function(data) {
                  $('#search_results').html(data);
                }
              });
            }
            else {
              $('#search_results').html('');
            }
          }).blur(function() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
              $('#search_results').html('');
            }, 200);
          });
        });
        
        function fillSearchBox(clickedText) {
        document.getElementById("search_term").value = clickedText;
        }
    </script>
</body>
</html>