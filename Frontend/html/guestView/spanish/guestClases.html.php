<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Driving</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../../../css/style.css" />
    <style>
        .card {
            margin: 20px;
            border: 2px solid black;
            overflow: hidden;
        }

        .section {
            border: 2px solid black;
        }

        .left-section {
            padding: 0;
        }

        .left-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-column {
            display: flex;
            flex-direction: column;
            min-height: 300px;
            position: relative;
            /* para posicionamiento del boton */
        }

        .right-upper,
        .right-lower {
            flex: 1;
        }

        .right-upper .row {
            height: 100%;
        }

        .right-upper .col-6 {
            display: flex;
            align-items: center;
        }

        .printOrder {
            position: absolute;
            bottom: 10px;
            right: 10px;
            margin: 0;
        }

        /* aseguramos que el contenido no se superponga con el boton */
        .right-lower {
            padding-bottom: 50px;
        }
    </style>
</head>

<body class="body2">
    
  <div style="min-height: 100vh;">
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
              <a href="guestFlota.html.php" class="nav-link">Flota</a>
            </li>
            <li class="nav-item">
              <a href="guestClases.html.php" class="nav-link active">Clases</a>
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

    <div class="container">
        <div class="card">
            <div class="row g-0 h-100">
                <!-- seccionn izquierda con imagen -->
                <div class="col-12 col-md-4 left-section">
                    <img src="https://via.placeholder.com/400x300" alt="Imagen de ejemplo" class="img-fluid h-100">
                </div>

                <!-- seccion derecha -->
                <div class="col-12 col-md-8 right-column">
                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="right-upper section h-100">
                        <div class="row g-0 h-100">
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 1</p>
                            </div>
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="h-100">
                        <div class="right-lower">
                            <p class="p-2 m-0">Descripcion Lorem ipsum dolor sit amet consectetur adipisicing elit. A,
                                tenetur corrupti quos harum cumque cum, ducimus laudantium nemo ipsam mollitia minima
                                explicabo inventore. Dolore blanditiis et voluptates at dignissimos sunt? Lorem ipsum,
                                dolor sit amet consectetur adipisicing elit. Praesentium, adipisci eaque. Nihil unde
                                repudiandae excepturi, incidunt expedita nesciunt quaerat dolor veritatis voluptatum?
                                Numquam ipsum labore tenetur sequi! Sequi, molestiae facere. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Error nisi quia tempore placeat deserunt ducimus, quod
                                amet, veritatis animi neque asperiores assumenda quibusdam cupiditate dolor fugiat
                                beatae ut ab accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                                nulla officia, aspernatur neque numquam corporis, temporibus deleniti non maxime
                                distinctio excepturi quas architecto ducimus amet optio libero odit id doloremque? Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt commodi numquam!
                                Dolorem nulla ullam labore inventore quidem aliquam nesciunt consectetur quam corrupti
                                saepe non eum officiis, rerum cumque animi.</p>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary printOrder">IMPRIMIR ORDEN DE
                                COMPRA</button>
                        </div>
                    </div>
                </div>




            </div>
        </div>




    </div>
    <div class="container">
        <div class="card">
            <div class="row g-0 h-100">
                <!-- seccionn izquierda con imagen -->
                <div class="col-12 col-md-4 left-section">
                    <img src="https://via.placeholder.com/400x300" alt="Imagen de ejemplo" class="img-fluid h-100">
                </div>

                <!-- seccion derecha -->
                <div class="col-12 col-md-8 right-column">
                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="right-upper section h-100">
                        <div class="row g-0 h-100">
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 1</p>
                            </div>
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="h-100">
                        <div class="right-lower">
                            <p class="p-2 m-0">Descripcion Lorem ipsum dolor sit amet consectetur adipisicing elit. A,
                                tenetur corrupti quos harum cumque cum, ducimus laudantium nemo ipsam mollitia minima
                                explicabo inventore. Dolore blanditiis et voluptates at dignissimos sunt? Lorem ipsum,
                                dolor sit amet consectetur adipisicing elit. Praesentium, adipisci eaque. Nihil unde
                                repudiandae excepturi, incidunt expedita nesciunt quaerat dolor veritatis voluptatum?
                                Numquam ipsum labore tenetur sequi! Sequi, molestiae facere. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Error nisi quia tempore placeat deserunt ducimus, quod
                                amet, veritatis animi neque asperiores assumenda quibusdam cupiditate dolor fugiat
                                beatae ut ab accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                                nulla officia, aspernatur neque numquam corporis, temporibus deleniti non maxime
                                distinctio excepturi quas architecto ducimus amet optio libero odit id doloremque? Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt commodi numquam!
                                Dolorem nulla ullam labore inventore quidem aliquam nesciunt consectetur quam corrupti
                                saepe non eum officiis, rerum cumque animi.</p>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary printOrder">IMPRIMIR ORDEN DE
                                COMPRA</button>
                        </div>
                    </div>
                </div>




            </div>
        </div>




    </div>
    <div class="container">
        <div class="card">
            <div class="row g-0 h-100">
                <!-- seccionn izquierda con imagen -->
                <div class="col-12 col-md-4 left-section">
                    <img src="https://via.placeholder.com/400x300" alt="Imagen de ejemplo" class="img-fluid h-100">
                </div>

                <!-- seccion derecha -->
                <div class="col-12 col-md-8 right-column">
                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="right-upper section h-100">
                        <div class="row g-0 h-100">
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 1</p>
                            </div>
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="h-100">
                        <div class="right-lower">
                            <p class="p-2 m-0">Descripcion Lorem ipsum dolor sit amet consectetur adipisicing elit. A,
                                tenetur corrupti quos harum cumque cum, ducimus laudantium nemo ipsam mollitia minima
                                explicabo inventore. Dolore blanditiis et voluptates at dignissimos sunt? Lorem ipsum,
                                dolor sit amet consectetur adipisicing elit. Praesentium, adipisci eaque. Nihil unde
                                repudiandae excepturi, incidunt expedita nesciunt quaerat dolor veritatis voluptatum?
                                Numquam ipsum labore tenetur sequi! Sequi, molestiae facere. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Error nisi quia tempore placeat deserunt ducimus, quod
                                amet, veritatis animi neque asperiores assumenda quibusdam cupiditate dolor fugiat
                                beatae ut ab accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                                nulla officia, aspernatur neque numquam corporis, temporibus deleniti non maxime
                                distinctio excepturi quas architecto ducimus amet optio libero odit id doloremque? Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt commodi numquam!
                                Dolorem nulla ullam labore inventore quidem aliquam nesciunt consectetur quam corrupti
                                saepe non eum officiis, rerum cumque animi.</p>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary printOrder">IMPRIMIR ORDEN DE
                                COMPRA</button>
                        </div>
                    </div>
                </div>




            </div>
        </div>




    </div>
    <div class="container">
        <div class="card">
            <div class="row g-0 h-100">
                <!-- seccionn izquierda con imagen -->
                <div class="col-12 col-md-4 left-section">
                    <img src="https://via.placeholder.com/400x300" alt="Imagen de ejemplo" class="img-fluid h-100">
                </div>

                <!-- seccion derecha -->
                <div class="col-12 col-md-8 right-column">
                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="right-upper section h-100">
                        <div class="row g-0 h-100">
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 1</p>
                            </div>
                            <div class="col-6">
                                <p class="p-2 m-0">Parte Superior Derecha - Columna 2</p>
                            </div>
                        </div>
                    </div>

                    <!-- parte superior derecha dividida en dos columnas -->
                    <div class="h-100">
                        <div class="right-lower">
                            <p class="p-2 m-0">Descripcion Lorem ipsum dolor sit amet consectetur adipisicing elit. A,
                                tenetur corrupti quos harum cumque cum, ducimus laudantium nemo ipsam mollitia minima
                                explicabo inventore. Dolore blanditiis et voluptates at dignissimos sunt? Lorem ipsum,
                                dolor sit amet consectetur adipisicing elit. Praesentium, adipisci eaque. Nihil unde
                                repudiandae excepturi, incidunt expedita nesciunt quaerat dolor veritatis voluptatum?
                                Numquam ipsum labore tenetur sequi! Sequi, molestiae facere. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Error nisi quia tempore placeat deserunt ducimus, quod
                                amet, veritatis animi neque asperiores assumenda quibusdam cupiditate dolor fugiat
                                beatae ut ab accusamus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                                nulla officia, aspernatur neque numquam corporis, temporibus deleniti non maxime
                                distinctio excepturi quas architecto ducimus amet optio libero odit id doloremque? Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Tenetur nesciunt commodi numquam!
                                Dolorem nulla ullam labore inventore quidem aliquam nesciunt consectetur quam corrupti
                                saepe non eum officiis, rerum cumque animi.</p>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary printOrder">IMPRIMIR ORDEN DE
                                COMPRA</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="../../../js/script.js"></script>

</body>

</html>