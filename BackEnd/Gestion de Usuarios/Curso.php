<?php
class Curso
{
    private String $documentoAlumno;
    private String $documentoInstructor;
    private String $matricula;
    private int $precio;
    private String $hora;
    private String $fecha;
    private String $tipoLibreta;
    private String $resultado;
    private String $tipo;
 
    public function __construct(String $documentoAlumno, String $documentoInstructor, String $matricula, int $precio ,String $hora, String $fecha, String $tipoLibreta, String $resultado, String $tipo)
    {
        $this->documentoInstructor = $documentoInstructor;
        $this->documentoAlumno = $documentoAlumno;
        $this->matricula = $matricula;
        $this->precio = $precio;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $this->tipoLibreta = $tipoLibreta;
        $this->resultado = $resultado;
        $this->tipo = $tipo;
    }

    /* Getters */

    public function getDocumentoInstructor()
    {
        return $this->documentoInstructor;
    }

    public function getDocumentoAlumno()
    {
        return $this->documentoAlumno;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getTipoLibreta()
    {
        return $this->tipoLibreta;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function getTipo()
    {
        return $this->tipo;
    }



    /* Setters */

    public function setDocumentoInstructor(String $documentoInstructor)
    {
        $this->documentoInstructor = $documentoInstructor;
    }

    public function setDocumentoAlumno(String $documentoAlumno)
    {
        $this->documentoAlumno = $documentoAlumno;
    }

    public function setMatricula(String $matricula)
    {
        $this->matricula = $matricula;
    }

    public function setPrecio(int $precio)
    {
        $this->precio = $precio;
    }

    public function setHora(String $hora)
    {
        $this->hora = $hora;
    }

    public function setFecha(String $fecha)
    {
        $this->fecha = $fecha;
    }

    public function setTipoLibreta(String $tipoLibreta)
    {
        $this->tipoLibreta = $tipoLibreta;
    }

    public function setResultado(String $resultado)
    {
        $this->resultado = $resultado;
    }

    public function setTipo(String $tipo)
    {
        $this->tipo = $tipo;
    }

    
    /* To String */

    public function __toString()
    {
        return "Documento Alumno: " . $this->documentoAlumno . " Documento Instructor: " . $this->documentoInstructor . " Matricula: " . $this->matricula . " Precio: " . $this->precio . " Hora: " . $this->hora . " Fecha: " . $this->fecha . " Tipo Libreta: " . $this->tipoLibreta . " Resultado: " . $this->resultado . " Tipo: " . $this->tipo;
    }
}
