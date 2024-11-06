<!DOCTYPE html>
<html lang="en">
45
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury Driving</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="frontend/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  
</head>
 
<body class="body2">
  <div style="min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
      <div class="container">
        <a href="index.html.php">
          <img src="frontend/img/logo.png" alt="Logo" width="200" height="67">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
          aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestNosotros.html.php" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestFlota.html.php" class="nav-link">Flota</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestClases.html.php" class="nav-link">Clases</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestContacto.html.php" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestChoferes.html.php" class="nav-link">Choferes</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestTests.html.php" class="nav-link">Tests</a>
            </li>
            <li class="nav-item">
              <a href="frontend/html/guestView/spanish/guestRequisitos.html.php" class="nav-link">Requisitos</a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                  class="bi bi-globe"></i></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html.php">Español</a></li>
                <li><a class="dropdown-item"
                    href="frontend/html/guestView/english/guestindex.html.php">Inglés</a></li>
                <li><a class="dropdown-item"
                    href="frontend/html/guestView/arabe/guestindex.html.php">Árabe</a></li>
              </ul>
            </li>
          
            <li class="nav-item dropdown">
              <a href="frontend/html/guestView/spanish/login.html.php" class="nav-link dropdown-toggle"><i
                  class="bi bi-person-circle"></i></a>
            </li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="frontend/img/home-2.jpg" class="d-block w-100" alt="" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="text-center mb-3">
              <span class="text-primary2">Academia</span>
              <span class="text-primary1">de</span>
              <span class="text-primary2">Choferes</span><br>
              <span class="luxury-driving">Luxury driving</span>
            </div>
            <a href="frontend/html/guestView/spanish/guestContacto.html.php" class="btn btn-info">Más Información</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="frontend/img/home-2.jpeg" class="d-block w-100" alt="" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="text-center mb-3">
              <span class="text-primary2">Academia</span>
              <span class="text-primary1">de</span>
              <span class="text-primary2">Choferes</span>
              <span class="luxury-driving">Luxury driving</span>
            </div>
            <a href="frontend/html/guestView/spanish/guestContacto.html.php" class="btn btn-info">Más Información</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="frontend/img/home-3.jpeg" class="d-block w-100" alt="" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="text-center mb-3">
              <span class="text-primary2">Academia</span>
              <span class="text-primary1">de</span>
              <span class="text-primary2">Choferes</span>
              <span class="luxury-driving">Luxury driving</span>
            </div>
            <a href="frontend/html/guestView/spanish/guestContacto.html.php" class="btn btn-info">Más Información</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <ul class="ul1 d-flex justify-content-center">
          <li class="li1"><a class="a1" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
          <li class="li1"><a class="a1" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
        </ul>

        <div class="footer-abajo d-flex justify-content-between align-items-center">
          <a href="#" class="footer-link">Servicios</a>
          <a href="guestLandingSpanish.html" class="footer-logo">
            <img src="Frontend/img/logo.png" alt="Logo" width="200" height="67">
          </a>
          <a href="#" class="footer-link">Contactanos</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="frontend/js/script.js"></script>
</body>

</html>