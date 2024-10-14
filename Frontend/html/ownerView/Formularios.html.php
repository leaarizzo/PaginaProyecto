<?php include '../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luxury Driving</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="body2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">

            <a href="../../../index.html.php">
                <img src="../../img/logo.png" alt="Logo" width="200" height="67">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
                aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar5">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestNosotros.html.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestFlota.html.php" class="nav-link">Flota</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestClases.html.php" class="nav-link">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestContacto.html.php" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestChoferes.html.php" class="nav-link">Choferes</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestTests.html.php" class="nav-link">Tests</a>
                    </li>
                    <li class="nav-item">
                        <a href="../guestView/spanish/guestRequisitos.html.php" class="nav-link">Requisitos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../index.html.php">Español</a></li>
                            <li><a class="dropdown-item" href="../guestView/english/guestLandingEnglish.html">Inglés</a></li>
                            <li><a class="dropdown-item" href="../guestView/english/guestLandingArabic.html.php">Árabe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
                            <li><a class="dropdown-item" href="../ownerView/Formularios.html.php">Formularios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <div class="adminCont">
  
    <a href="ownerLandingSpanish.html.php"> Volver </a>

    <h1> FORMULARIOS </h1>

    <h2> Usuarios </h2>
    <a href="formularioAltaUsuarios.html.php"> Alta de Usuario </a> <br>
    <a href="formularioBajaUsuarios.html.php"> Baja de Usuario </a> <br>
    <a href="formularioModificarUsuarios.html.php"> Modificación de Usuario </a> <br>

    <h2> Cursos </h2>
    <a href="formularioAltaCurso.html.php"> Alta de Curso </a> <br>
    <a href="formularioBajaCurso.html.php"> Baja de Curso </a> <br>
    <a href="formularioModificarCurso.html.php"> Modificación de Curso </a> <br>

    <h2> Vehículos </h2>
    <a href="formularioAltaVehiculo.html.php"> Alta de Vehículo </a> <br>
    <a href="formularioBajaVehiculo.html.php"> Baja de Vehículo </a> <br>
    <a href="formularioModificarVehiculo.html.php"> Modificación de Vehículo </a> <br>

    </div>

    
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <ul class="ul1">
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    <li class="li1"><a class="a1" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>

                <div class="footer-abajo">
                    <a href="#" class="footer-link">Servicios</a>
                    <a href="guestLandingSpanish.html" class="footer-logo">
                        <img src="../../img/logo.png" alt="Logo" width="200" height="67">
                    </a>
                    <a href="#" class="footer-link">Contactanos</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>