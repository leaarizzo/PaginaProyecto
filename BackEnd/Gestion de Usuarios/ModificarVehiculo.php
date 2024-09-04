        <?php
        require_once 'Controlador.php';
        require_once 'Vehiculo.php';
        $controla = new Controlador();

        $matricula = $_POST['txtMatricula'];
        $dato = $_POST['txtDato'];
        $nuevo = $_POST['txtNuevo'];

        $controla->modificarVehiculo($matricula, $dato, $nuevo);

        header('Location: vista.html.php');
        ?>