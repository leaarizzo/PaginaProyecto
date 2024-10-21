<?php include '../../../../BackEnd/Gestion de Usuarios/verificarpermisos3.php'; ?>

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
    <link rel="stylesheet" href="../../../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="body2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
        <div class="container">
            <a href="adminIndex.html.php">
                <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
                aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar5">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="adminNosotros.html.php" class="nav-link">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminFlota.html.php" class="nav-link">Flota</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminClases.html.php" class="nav-link">Clases</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminContacto.html.php" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminChoferes.html.php" class="nav-link">Choferes</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminTests.html.php" class="nav-link">Tests</a>
                    </li>
                    <li class="nav-item">
                        <a href="adminRequisitos.html.php" class="nav-link">Requisitos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-globe"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../spanish/adminIndex.html.php">Español</a></li>
                            <li><a class="dropdown-item" href="../english/adminIndex">Inglés</a></li>
                            <li><a class="dropdown-item" href="../arabe/adminIndex">Árabe</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../../../BackEnd/Gestion de Usuarios/logOut.php">Log Out</a></li>
                            <li><a class="dropdown-item" href="../../adminView/spanish/adminPerfil.html.php">Perfil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1> index admin </h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="../../js/script.js"></script>

</body>

</html>