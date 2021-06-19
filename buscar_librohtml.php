<?php include ("conexion_bd.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EsBook</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        freemind@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +57 3108923641
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="inicio.html" class="nav-item nav-link">Inicio</a>
                            <a href="product-list.html" class="nav-item nav-link">Libros</a>
                            <a href="cart.html" class="nav-item nav-link">Carrito de compras</a>
                            <a href="checkout.html" class="nav-item nav-link">Pago</a>
                            <a href="my-account.html" class="nav-item nav-link">Mi cuenta</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Mas paginas</a>
                                <div class="dropdown-menu">
                                    <a href="buscar_librohtml.php" class="dropdown-item">Buscar Libros</a>
                                    <a href="crear_librohtml.php" class="dropdown-item">Crear Libro</a>                                    
                                    <a href="login.html" class="dropdown-item">Iniciar sesión & Registrarse</a>
                                    <!-- <a href="contact.html" class="dropdown-item">Contactenos</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mi cuenta</a> -->
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Iniciar sesión</a>
                                    <a href="#" class="dropdown-item">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <form method="POST" action="buscar_librohtml.php">
                                <input type="text" name='busqueda' placeholder="Buscar...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Mas páginas</a></li>
                    <li class="breadcrumb-item active">Buscar libros</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Wishlist Start -->
        <div class="wishlist-page">
            <div class="container-fluid">
                <div class="wishlist-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Portada</th>
                                            <th>Codigo</th>
                                            <th>Titulo</th>
                                            <th>Autor</th>
                                            <th>Fecha Publicacion</th>
                                            <th>Genero</th>
                                            <th>Paginas</th>
                                            <th>Editorial</th>
                                            <th>ISSN</th>
                                            <th>Idioma</th>
                                            <th>Estado</th>
                                            <th>Precio</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php

                                            $busqueda = isset($_POST['busqueda'])? $_POST['busqueda'] : '';

                                            $consulta = "SELECT * FROM libros WHERE codigo_libro='$busqueda' OR titulo='$busqueda' OR autor='$busqueda' OR fecha_publicacion='$busqueda' OR genero_literario='$busqueda' OR numero_paginas='$busqueda' OR editorial='$busqueda' OR idioma='$busqueda' OR estado='$busqueda'";

                                            $resultados = pg_query($conn,$consulta);

                                            $respuesta = pg_num_rows($resultados);
                                            while ($row = pg_fetch_array($resultados)) { ?>

                                            <tr>
                                                <td>
                                                    <div class="img">
                                                        <a href="#"><img src= "<?php echo $row['imagen_portado'] ?>" ></a>
                                                    </div>
                                                </td>
                                                <td><?php echo $row['codigo_libro'] ?></td>
                                                <td><?php echo $row['titulo'] ?></td>
                                                <td><?php echo $row['autor'] ?></td>
                                                <td><?php echo $row['fecha_publicacion'] ?></td>
                                                <td><?php echo $row['genero_literario'] ?></td>
                                                <td><?php echo $row['numero_paginas'] ?></td>
                                                <td><?php echo $row['editorial'] ?></td>
                                                <td><?php echo $row['issn'] ?></td>
                                                <td><?php echo $row['idioma'] ?></td>
                                                <td><?php echo $row['estado'] ?></td>
                                                <td><?php echo $row['precio'] ?></td>
                                                <td>
                                                    <a href="editar.php?codigo_libro= <?php echo $row['codigo_libro']?>" class="btn btn-secondary">
                                                    <span class="material-icons-outlined">
                                                    edit
                                                    </span></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contacto</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Pereira-Risaralda</p>
                                <p><i class="fa fa-envelope"></i>freemind@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+57 3108923641</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Siguenos</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Informacion</h2>
                            <ul>
                                <li><a href="#">Acerca de nosotros</a></li>
                                <li><a href="#">Politica de privacidad</a></li>
                                <li><a href="#">Terminos y condiciones</a></li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Aceptamos</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
