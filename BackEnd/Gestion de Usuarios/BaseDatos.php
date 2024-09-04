<?php
class BaseDatos
{
    /********************************************************************************/
    private $servidor;      // En Xampp es "localhost"
    private $usuario;       // En Xampp es "root"
    private $password;      // En Xampp es ""
    private $base_datos;    // base datos en phpmyadmin
    private $conexion;      // Para las operaciones con MySQL
    /********************************************************************************/
    public function __construct()
    {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->password = "";
        $this->base_datos = "luxurydriving";
        $this->conexion = $this->nueva("localhost", "root", "", "luxurydriving");
    }
    /*************************************************************************************************************************************************/
    private function nueva($server, $user, $pass, $base)
    {
        try {
            $conectar = mysqli_connect($server, $user, $pass, $base);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
        return $conectar;
    }
    /******************************************************************************************************************************************/

    /**************************************/
    /*               ALTAS                */
    /**************************************/

    // Altas de Usuarios en Tablas   

    /**
     * 
     * 
     * @param type $usuario
     */
    public function ingresarAlumno($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $estadoTeorico = $usuario->getEstadoTeorico();
        $permisos = $usuario->getPermisos();
        $fechaIns = $usuario->getFechaIns();

        $insertar = "insert into alumno values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$estadoTeorico','$permisos', '$fechaIns')";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarCategoriaAlumnos($usuario)
    {

        $documento = $usuario->getDocumento();
        $categoriaLibreta = $usuario->getCategoriaLibreta();

        for ($i = 0; $i < count($usuario->getCategoriaLibreta()); $i++) {
            $insertar = "insert into alumno_libreta values('$documento','$categoriaLibreta[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarInstructor($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $permisos = $usuario->getPermisos();

        $insertar = "insert into instructor values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$permisos')";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarCategoriaInstructores($usuario)
    {
        $documento = $usuario->getDocumento();
        $categoriaClase = $usuario->getCategoriaClase();

        for ($i = 0; $i < count($usuario->getCategoriaClase()); $i++) {
            $insertar = "insert into instructor_categoria values('$documento','$categoriaClase[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarHorariosInstructores($usuario)
    {
        $documento = $usuario->getDocumento();
        $horarios = $usuario->getHorarios();

        for ($i = 0; $i < count($usuario->getHorarios()); $i++) {
            $insertar = "insert into instructor_horarios values('$documento','$horarios[$i]')";
            mysqli_query($this->conexion, $insertar);
        }
    }

    public function ingresarAdministrador($usuario)
    {
        $documento = $usuario->getDocumento();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $fechaNac = $usuario->getFechaNac();
        $telefono = $usuario->getTelefono();
        $correo = $usuario->getCorreo();
        $username = $usuario->getUsername();
        $password = $usuario->getPassword();
        $permisos = $usuario->getPermisos();

        $insertar = "insert into administrador values('$documento','$nombre','$apellido','$fechaNac','$telefono','$correo','$username','$password','$permisos')";
        return mysqli_query($this->conexion, $insertar);
    }

    // Altas de Vehiuclos en Tablas

    public function ingresarVehiculo($vehiculo)
    {
        $matricula = $vehiculo->getMatricula();
        $modelo = $vehiculo->getModelo();
        $motor = $vehiculo->getMotor();
        $combustible = $vehiculo->getCombustible();
        $medida = $vehiculo->getMedida();
        $situacionActual = $vehiculo->getSituacionActual();
        $kilometraje = $vehiculo->getKilometraje();
        $categoria = $vehiculo->getCategoria();

        $insertar = "insert into vehiculo values('$matricula','$modelo','$motor','$combustible','$medida','$situacionActual','$kilometraje','$categoria')";
        return mysqli_query($this->conexion, $insertar);
    }

    // Altas de Cursos en Tablas   

    public function ingresarClase($clase)
    {
        $codigoClase = $clase->getCodigoClase();
        $documentoInstructor = $clase->getDocumentoInstructor();
        $documentoAlumno = $clase->getDocumentoAlumno();
        $matricula = $clase->getMatricula();
        $hora = $clase->getHora();
        $fecha = $clase->getFecha();
        $tipoLibreta = $clase->getTipoLibreta();
        $estado = $clase->getEstado();
        $precio = $clase->getPrecio();

        $insertar = "insert into clase values('$codigoClase','$documentoInstructor','$documentoAlumno','$matricula','$hora','$fecha','$tipoLibreta','$estado','$precio')";
        return mysqli_query($this->conexion, $insertar);
    }

    public function ingresarPrueba($prueba)
    {
        $codigoPrueba = $prueba->getCodigoPrueba();
        $documentoInstructor = $prueba->getDocumentoInstructor();
        $documentoAlumno = $prueba->getDocumentoAlumno();
        $matricula = $prueba->getMatricula();
        $hora = $prueba->getHora();
        $fecha = $prueba->getFecha();
        $tipoLibreta = $prueba->getTipoLibreta();
        $estado = $prueba->getEstado();
        $precio = $prueba->getPrecio();

        $insertar = "insert into prueba values('$codigoPrueba','$documentoInstructor','$documentoAlumno','$matricula','$hora','$fecha','$tipoLibreta','$estado','$precio')";
        return mysqli_query($this->conexion, $insertar);
    }


    /**************************************/
    /*               BAJAS                */
    /**************************************/

    // Bajas de Usuarios en Tablas

    public function eliminarAlumno($documento)
    {
        $eliminar = "delete from alumno where documentoAlumno = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarInstructor($documento)
    {
        $eliminar = "delete from instructor where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarAdministrador($documento)
    {
        $eliminar = "delete from administrador where documentoAdmin = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarCategoriaAlumno($documento)
    {
        $eliminar = "delete from alumno_libreta where documentoAlumno = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarCategoriaInstructor($documento)
    {
        $eliminar = "delete from instructor_categoria where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarHorariosInstructor($documento)
    {
        $eliminar = "delete from instructor_horarios where documentoInstructor = '$documento'";
        return mysqli_query($this->conexion, $eliminar);
    }

    // Bajas de Vehiculos en Tablas
    public function eliminarVehiculo($matricula)
    {
        $eliminar = "delete from vehiculo where matricula = '$matricula'";
        return mysqli_query($this->conexion, $eliminar);
    }

    // Bajas de Cursos en Tablas

    public function eliminarClase($codigoClase)
    {
        $eliminar = "delete from clase where codigoClase = '$codigoClase'";
        return mysqli_query($this->conexion, $eliminar);
    }

    public function eliminarPrueba($codigoPrueba)
    {
        $eliminar = "delete from prueba where codigoPrueba = '$codigoPrueba'";
        return mysqli_query($this->conexion, $eliminar);
    }


    /**************************************/
    /*           MODIFICACIONES           */
    /**************************************/

    // Modificaciones de Usuarios en Tablas

    public function modificarAlumno($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update alumno set nombre = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update alumno set apellido = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update alumno set fechaNacimiento = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update alumno set telefono = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update alumno set correo = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update alumno set username = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'password':
                $modificar = "update alumno set password = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update alumno set permisos = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaInscripcion':
                $modificar = "update alumno set fechaInscripcion = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);

            case 'estadoTeorico':
                $modificar = "update alumno set estadoTeorico = '$nuevo' where documentoAlumno = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'categoriaLibreta':
                $this->eliminarCategoriaAlumno($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into alumno_libreta values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;
        }
    }

    public function modificarInstructor($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update instructor set nombre = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update instructor set apellido = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update instructor set fechaNacimiento = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update instructor set telefono = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update instructor set correo = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update instructor set username = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'password':
                $modificar = "update instructor set password = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update instructor set permisos = '$nuevo' where documentoInstructor = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;


            case 'categoriaClase':
                $this->eliminarCategoriaInstructor($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into instructor_categoria values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;

            case 'horarios':
                $this->eliminarHorariosInstructor($documento);
                for ($i = 0; $i < count($nuevo); $i++) {
                    $modificar = "insert into instructor_horarios values('$documento','$nuevo[$i]')";
                    mysqli_query($this->conexion, $modificar);
                }
                break;
        }
    }

    public function modificarAdministrador($documento, $dato, $nuevo)
    {
        switch ($dato) {
            case 'nombre':
                $modificar = "update administrador set nombre = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'apellido':
                $modificar = "update administrador set apellido = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'fechaNacimiento':
                $modificar = "update administrador set fechaNacimiento = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'telefono':
                $modificar = "update administrador set telefono = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'correo':
                $modificar = "update administrador set correo = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'username':
                $modificar = "update administrador set username = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'password':
                $modificar = "update administrador set password = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'permisos':
                $modificar = "update administrador set permisos = '$nuevo' where documentoAdmin = '$documento'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    // Modificaciones de Vehiculos en Tablas
    public function modificarVehiculo($matricula, $dato, $nuevo)
    {
        switch ($dato) {
            case 'modelo':
                $modificar = "update vehiculo set modelo = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'motor':
                $modificar = "update vehiculo set motor = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'combustible':
                $modificar = "update vehiculo set combustible = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'medida':
                $modificar = "update vehiculo set medida = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'situacionActual':
                $modificar = "update vehiculo set situacionActual = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'kilometraje':
                $modificar = "update vehiculo set kilometraje = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;

            case 'categoria':
                $modificar = "update vehiculo set categoria = '$nuevo' where matricula = '$matricula'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    // Modificaciones de Cursos en Tablas

    public function modificarClase($codigoClase, $dato, $nuevo)
    {
        switch ($dato) {
            case 'documentoInstructor':
                $modificar = "update clase set documentoInstructor = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'documentoAlumno':
                $modificar = "update clase set documentoAlumno = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'matricula':
                $modificar = "update clase set matricula = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'hora':
                $modificar = "update clase set hora = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'fecha':
                $modificar = "update clase set fecha = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'tipoLibreta':
                $modificar = "update clase set tipoLibreta = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'estado':
                $modificar = "update clase set estado = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'precio':
                $modificar = "update clase set precio = '$nuevo' where codigoClase = '$codigoClase'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }


    public function modificarPrueba($codigoPrueba, $dato, $nuevo)
    {
        switch ($dato) {
            case 'documentoInstructor':
                $modificar = "update prueba set documentoInstructor = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'documentoAlumno':
                $modificar = "update prueba set documentoAlumno = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'matricula':
                $modificar = "update prueba set matricula = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'hora':
                $modificar = "update prueba set hora = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'fecha':
                $modificar = "update prueba set fecha = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'tipoLibreta':
                $modificar = "update prueba set tipoLibreta = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'estado':
                $modificar = "update prueba set estado = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
            case 'precio':
                $modificar = "update prueba set precio = '$nuevo' where codigoPrueba = '$codigoPrueba'";
                mysqli_query($this->conexion, $modificar);
                break;
        }
    }

    /**************************************/
    /*           LOG IN                   */
    /**************************************/

    // LogIn
    public function logueo($username, $password)
    {

        $consulta = "select * from alumno where username = '$username' and passwrd = '$password'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        if (count($arreglo) == 0) {
            $consulta = "select * from instructor where username = '$username' and passwrd = '$password'";
            $resultado = mysqli_query($this->conexion, $consulta);
            $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

            if (count($arreglo) == 0) {
                $consulta = "select * from administrador where username = '$username' and passwrd = '$password'";
                $resultado = mysqli_query($this->conexion, $consulta);
                $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            }
        }
        return count($arreglo);
    }

    // Permisos
    public function comprobarPermisos($username)
    {
        $consulta = "select permisos from alumno where username = '$username'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        if (count($arreglo) == 0) {
            $consulta = "select permisos from instructor where username = '$username'";
            $resultado = mysqli_query($this->conexion, $consulta);
            $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

            if (count($arreglo) == 0) {
                $consulta = "select permisos from administrador where username = '$username'";
                $resultado = mysqli_query($this->conexion, $consulta);
                $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            }
        }

        return $arreglo;
        echo "hola";
        print_r($arreglo[0][0]);
        return $arreglo;
    }

    // Comprobar Usuario
    public function comprobarUsuario($username)
    {
        $consulta = "select * from alumno where username = '$username'";
        $resultado = mysqli_query($this->conexion, $consulta);
        $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        $usuario = $this->seleccionarAlumno($username);

        if (count($arreglo) == 0) {
            $consulta = "select * from instructor where username = '$username'";
            $resultado = mysqli_query($this->conexion, $consulta);
            $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            $usuario = $this->seleccionarInstructor($username);

            if (count($arreglo) == 0) {
                $consulta = "select * from administrador where username = '$username'";
                $resultado = mysqli_query($this->conexion, $consulta);
                $arreglo = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                $usuario = $this->seleccionarAdmin($username);
            }
        }
        return $usuario;
    }

    /**************************************/
    /*             SELECCIONES            */
    /**************************************/

    /********************************************************************************/

    public function seleccionarAdmin($username)
    {
        $resultadoAlumno = mysqli_query($this->conexion, "select * from administrador where username = '$username'");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }


    public function seleccionarAlumno($username)
    {
        $resultadoAlumno = mysqli_query($this->conexion, "select * from alumno where username = '$username'");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }


    public function seleccionarInstructor($username)
    {
        $resultadoAlumno = mysqli_query($this->conexion, "select * from instructor where username = '$username'");
        $arreglo = mysqli_fetch_all($resultadoAlumno, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarAlumnos()
    {
        $resultadoAlumnos = mysqli_query($this->conexion, "select * from alumno");
        $arreglo = mysqli_fetch_all($resultadoAlumnos, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarCategorias()
    {
        $resultadoCategorias = mysqli_query($this->conexion, "select * from alumno_libreta");
        $arreglo = mysqli_fetch_all($resultadoCategorias, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarInstructores()
    {
        $resultadoInstructores = mysqli_query($this->conexion, "select * from instructor");
        $arreglo = mysqli_fetch_all($resultadoInstructores, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarCategoriaClase()
    {
        $resultadoCategoriaClase = mysqli_query($this->conexion, "select * from instructor_categoria");
        $arreglo = mysqli_fetch_all($resultadoCategoriaClase, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarHorarios()
    {
        $resultadoHorarios = mysqli_query($this->conexion, "select * from instructor_horarios");
        $arreglo = mysqli_fetch_all($resultadoHorarios, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarAdministradores()
    {
        $resultadoAdministrador = mysqli_query($this->conexion, "select * from administrador");
        $arreglo = mysqli_fetch_all($resultadoAdministrador, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarVehiculos()
    {
        $resultadoVehiculos = mysqli_query($this->conexion, "select * from vehiculo");
        $arreglo = mysqli_fetch_all($resultadoVehiculos, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarClases()
    {
        $resultadoClases = mysqli_query($this->conexion, "select * from clase");
        $arreglo = mysqli_fetch_all($resultadoClases, MYSQLI_ASSOC);
        return $arreglo;
    }

    public function seleccionarpruebas()
    {
        $resultadoPruebas = mysqli_query($this->conexion, "select * from prueba");
        $arreglo = mysqli_fetch_all($resultadoPruebas, MYSQLI_ASSOC);
        return $arreglo;
    }

    /********************************************************************************/
}
