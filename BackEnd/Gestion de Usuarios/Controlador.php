<?php
require_once 'Usuario.php';
require_once 'Instructor.php';
require_once 'Administrador.php';
require_once 'Alumno.php';
require_once 'Vehiculo.php';
require_once 'BaseDatos.php';
require_once 'Curso.php';

class Controlador{

    private $base;

    public function __construct()
    {
        $this->base = new BaseDatos();
    }

    /* Casos de uso */

    /********************************/
    /*           ALTAS              */
    /********************************/

    /* Alta Usuarios */

    public function altaAlumno(string $documento, string $nombre, string $apellido, string $fecha_nac, string $telefono, string $correo, string $username, string $password, array $categoriaLibreta, string $estadoTeorico, string $permisos, string $fechaIns)
    {
        $alumno = new Alumno($estadoTeorico, $documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos, $fechaIns);
        echo ('<pre>');
        echo ($alumno);
        echo ('</pre>');
        $this->base->ingresarAlumno($alumno);
        $alumno->setCategoriaLibreta($categoriaLibreta);
        $this->base->ingresarCategoriaAlumnos($alumno);
    }

    public function altaInstructor(array $horarios, array $categoriaClase, String $documento, String $nombre, String $apellido, String $fecha_nac, String $telefono, String $correo, String $username, String $password, string $permisos)
    {
        $instructor = new Instructor($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
        $this->base->ingresarInstructor($instructor);
        $instructor->setCategoriaClase($categoriaClase);
        $this->base->ingresarCategoriaInstructores($instructor);
        $instructor->setHorarios($horarios);
        $this->base->ingresarHorariosInstructores($instructor);
    }

    public function altaAdministrador(String $documento, String $nombre, String $apellido, String $fecha_nac, String $telefono, String $correo, String $username, String $password, String $permisos)
    {
        $administrador = new Administrador($documento, $nombre, $apellido, $fecha_nac, $telefono, $correo, $username, $password, $permisos);
        $this->base->ingresarAdministrador($administrador);
    }

    /* Alta Vehiculo */

    public function altaVehiculo(string $matricula, string $modelo, string $motor, string $combustible, string $medida, string $situacionActual, int $kilometraje, string $categoria)
    {
        $vehiculo = new Vehiculo($matricula, $modelo, $motor, $combustible, $medida, $situacionActual, $kilometraje, $categoria);
        $this->base->ingresarVehiculo($vehiculo);
    }

    /* Alta Cursos */

    public function altaCurso(string $documentoAlumno, string $documentoInstructor, string $matricula, int $precio, string $hora, string $fecha, string $tipoLibreta, string $resultado, string $tipo)
    {
        $curso = new Curso($documentoAlumno, $documentoInstructor, $matricula, $precio, $hora, $fecha, $tipoLibreta, $resultado, $tipo, true);
        $this->base->ingresarCurso($curso);
    }

    

    /********************************/
    /*           BAJAS              */
    /********************************/

    /* Baja Usuarios */

    public function bajaAlumno(String $documento, String $opcion)
    {
        $this->base->eliminarCategoriaAlumno($documento);
        $this->base->eliminarAlumno($documento, $opcion);
    }

    public function bajaInstructor(String $documento, String $opcion)
    {
        $this->base->eliminarCategoriaInstructor($documento);
        $this->base->eliminarHorariosInstructor($documento);
        $this->base->eliminarInstructor($documento, $opcion);
    }

    public function bajaAdministrador(String $documento, String $opcion)
    {
        $this->base->eliminarAdministrador($documento, $opcion);
    }

    /* Baja Vehiculo */

    public function bajaVehiculo(String $matricula, String $opcion)
    {
        $this->base->eliminarVehiculo($matricula, $opcion);
    }

    /* Baja Cursos */

    public function bajaCurso(String $codigoClase, String $opcion)
    {
        $this->base->eliminarCurso($codigoClase, $opcion);
        
    }



    /********************************/
    /*        MODIFICACIONES        */
    /********************************/

    /* Modificar Usuarios */

    public function modificarAlumno($documento, $dato, $nuevo)
    {
        $this->base->modificarAlumno($documento, $dato, $nuevo);
    }

    public function modificarInstructor($documento, $dato, $nuevo)
    {
        $this->base->modificarInstructor($documento, $dato, $nuevo);
    }

    public function modificarAdministrador($documento, $dato, $nuevo)
    {
        $this->base->modificarAdministrador($documento, $dato, $nuevo);
    }

    /* Modificar Vehiculo */

    public function modificarVehiculo($matricula, $dato, $nuevo)
    {
        $this->base->modificarVehiculo($matricula, $dato, $nuevo);
    }

    /* Modificar Cursos */

    public function modificarClase($codigoClase, $dato, $nuevo)
    {
        $this->base->modificarCurso($codigoClase, $dato, $nuevo);
    }

    /********************************/
    /*           LOG IN             */
    /********************************/

    /* LogIn */

    public function logIn(String $username, String $password)
    {
        $usuario = $this->base->logueo($username, $password);
        return $usuario;
    }

    /* Comprobar Permisos */

    public function comprobarPermiso(String $username)
    {
        $permiso = $this->base->comprobarPermisos($username);
        return $permiso;
    }

    /* Comprobar Usuario */

    public function comprobarUsuario(String $username)
    {
        $usuario = $this->base->comprobarUsuario($username);
        return $usuario;
    }


    /********************************/
    /*           TRAER TABLA        */
    /********************************/

    /* Traer Tabla Usuarios*/

    public function traerTablaInstructores()
    {
        echo ('<pre>');
        echo ('Instructores');
        print_r($this->base->seleccionarInstructores());
        echo ('</pre>');
    }

    public function traerTablaAdministradores()
    {
        echo ('<pre>');
        echo ('Administradores');
        print_r($this->base->seleccionarAdministradores());
        echo ('</pre>');
    }

    public function traerTablaCategorias()
    {
        echo ('<pre>');
        echo ('Categoria - Alumno');
        print_r($this->base->seleccionarCategorias());
        echo ('</pre>');
    }

    public function traerTablaCategoriaClase()
    {
        echo ('<pre>');
        echo ('Categoria - Instructor');
        print_r($this->base->seleccionarCategoriaCurso());
        echo ('</pre>');
    }

    public function traerTablaHorarios()
    {
        echo ('<pre>');
        echo ('Horarios - Instructor');
        print_r($this->base->seleccionarHorarios());
        echo ('</pre>');
    }

    /* Traer Tabla Vehiculos */

    public function traerTablaVehiculos()
    {
        echo ('<pre>');
        echo ('Vehiculos');
        print_r($this->base->seleccionarVehiculos());
        echo ('</pre>');
    }

    /* Traer Tabla Cursos */

    public function traerTablaClases()
    {
        echo ('<pre>');
        echo ('Clases');
        print_r($this->base->seleccionarCursos());
        echo ('</pre>');
    }
}