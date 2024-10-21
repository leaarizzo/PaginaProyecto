<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Flota - Luxury Driving</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/flota.css">
    <style>
        .modal-contenido {
            background-color: #1a1a1a;
            color: white;
        }
        .modal-header {
            border-bottom: 1px solid #333;
        }
        .modal-footer {
            border-top: 1px solid #333;
        }
        .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }
 
    </style>
</head>

<body class="body2">
<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
      <div class="container">
        <a href="../../../../index.html.php">
          <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar5"
          aria-controls="navbar5" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="guestNosotros.html.php" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="guestFlota.html.php" class="nav-link  active">Flota</a>
            </li>
            <li class="nav-item">
              <a href="guestClases.html.php" class="nav-link">Clases</a>
            </li>
            <li class="nav-item">
              <a href="guestContacto.html.php" class="nav-link">Contacto</a>
            </li>
            <li class="nav-item">
              <a href="guestChoferes.html.php" class="nav-link">Choferes</a>
            </li>
            <li class="nav-item">
              <a href="guestTests.html.php" class="nav-link">Tests</a>
            </li>
            <li class="nav-item">
              <a href="guestRequisitos.html.php" class="nav-link">Requisitos</a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-globe"></i>
              </a>
              
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="guestLandingSpanish.html.php">Español</a></li>
                <li><a class="dropdown-item" href="../english/guestLandingEnglish.html.php">Inglés</a></li>
                <li><a class="dropdown-item" href="../english/guestLandingArabic.html.php">Árabe</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a href="login.html.php" class="nav-link dropdown-toggle"><i
                  class="bi bi-person-circle"></i></a>
            </li>
          
          </ul>
        </div>
      </div>
    </nav>

    <main class="container mt-5 pt-5">
        <h1 class="text-white mb-4">NUESTRA FLOTA</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal1">
                    <img src="../../../img/flota2.jpg" class="card-img-top" alt="Peugeot 208 Style 2023">
                    <div class="card-body">
                        <h5 class="card-title">PEUGEOT 208 STYLE 2023</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal2">
                    <img src="../../../img/flota1.jpg" class="card-img-top" alt="Camion Mercedes 2430">
                    <div class="card-body">
                        <h5 class="card-title">CAMION MERCEDES 2430</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal3">
                    <img src="../../../img/flota3.jpg" class="card-img-top" alt="Onix Turbors 2021">
                    <div class="card-body">
                        <h5 class="card-title">CHEVROLET ONIX TURBO RS 2021</h5>
                        <p class="card-text">(COCHE ESCUELA)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal4">
                    <img src="../../../img/flota4.jpg" class="card-img-top" alt="Mercedes AMG C63">
                    <div class="card-body">
                        <h5 class="card-title">MERCEDES AMG C63</h5>
                        <p class="card-text">(CLASES ESPECIALES)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal5">
                    <img src="../../../img/flota5.jpg" class="card-img-top" alt="RAM 1500 TRX 2021">
                    <div class="card-body">
                        <h5 class="card-title">RAM 1500 TRX 2021</h5>
                        <p class="card-text">(CLASES ESPECIALES)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#modal6">
                    <img src="../../../img/flota6.jpg" class="card-img-top" alt="Nissan Sentra 2023">
                    <div class="card-body">
                        <h5 class="card-title">NISSAN SENTRA 2023</h5>
                        <p class="card-text">(COCHE ADMIN)</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modales para cada vehículo -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel1">PEUGEOT 208 STYLE 2023</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Coche Escuela</p>
                    <p><strong>Motor:</strong> 1.2L PureTech 100 S&S</p>
                    <p><strong>Potencia:</strong> 100 CV</p>
                    <p><strong>Transmisión:</strong> Manual de 6 velocidades</p>
                    <p><strong>Consumo promedio:</strong> 4.5L/100km</p>
                    <p><strong>Características:</strong> Pantalla táctil de 7", Apple CarPlay, Android Auto, Control de crucero</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel2">CAMION MERCEDES 2430</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Coche Escuela (Camión)</p>
                    <p><strong>Motor:</strong> OM 926 LA</p>
                    <p><strong>Potencia:</strong> 300 CV</p>
                    <p><strong>Transmisión:</strong> Manual de 8 velocidades</p>
                    <p><strong>Capacidad de carga:</strong> 15 toneladas</p>
                    <p><strong>Características:</strong> Frenos ABS, Control de tracción, Cabina espaciosa con litera</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel3">ONIX TURBO RS 2021</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Coche Escuela</p>
                    <p><strong>Motor:</strong> 1.0L Turbo Flex</p>
                    <p><strong>Potencia:</strong> 116 CV</p>
                    <p><strong>Transmisión:</strong> Manual de 6 velocidades</p>
                    <p><strong>Consumo promedio:</strong> 5.9L/100km</p>
                    <p><strong>Características:</strong> Pantalla táctil de 8", WiFi integrado, 6 airbags, Control de estabilidad</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel4">MERCEDES AMG C63</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Clases Especiales</p>
                    <p><strong>Motor:</strong> V8 Biturbo de 4.0L</p>
                    <p><strong>Potencia:</strong> 503 CV</p>
                    <p><strong>Transmisión:</strong> Automática de 9 velocidades</p>
                    <p><strong>Aceleración 0-100 km/h:</strong> 3.9 segundos</p>
                    <p><strong>Características:</strong> Suspensión adaptativa, Sistema de escape deportivo, Interior de lujo con detalles en fibra de carbono</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel5">RAM 1500 TRX 2021</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Clases Especiales</p>
                    <p><strong>Motor:</strong> V8 HEMI Supercharged de 6.2L</p>
                    <p><strong>Potencia:</strong> 702 CV</p>
                    <p><strong>Transmisión:</strong> Automática de 8 velocidades</p>
                    <p><strong>Capacidad de remolque:</strong> 3,674 kg</p>
                    <p><strong>Características:</strong> Suspensión off-road Bilstein, Modo de conducción Baja, Sistema de infoentretenimiento Uconnect de 12"</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modalLabel6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-contenido">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel6">NISSAN SENTRA 2023</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tipo:</strong> Coche Administración</p>
                    <p><strong>Motor:</strong> 2.0L de 4 cilindros</p>
                    <p><strong>Potencia:</strong> 149 CV</p>
                    <p><strong>Transmisión:</strong> CVT (Transmisión Continuamente Variable)</p>
                    <p><strong>Consumo promedio:</strong> 6.7L/100km</p>
                    <p><strong>Características:</strong> Nissan Safety Shield 360, Android Auto, Apple CarPlay, Cámara de visión trasera</p>
                </div>
            </div>
        </div>
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
                    <a href="index.html.php" class="footer-logo">
                        <img src="../../../img/logo.png" alt="Logo" width="200" height="67">
                    </a>
                    <a href="#" class="footer-link">Contactanos</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var modals = document.querySelectorAll('.modal');
            
            modals.forEach(function(modal) {
                modal.addEventListener('hidden.bs.modal', function() {
                  
                    window.location.href = 'guestFlota.html.php';
                });
            });

            document.querySelectorAll('.card').forEach(card => {
                card.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-bs-target');
                    const modal = new bootstrap.Modal(document.querySelector(modalId));
                    modal.show();
                });
            });
        });
    </script>
</body>
</html>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
crossorigin="anonymous"></script>
<script src="../../../js/script.js"></script>
</body>

</html>

