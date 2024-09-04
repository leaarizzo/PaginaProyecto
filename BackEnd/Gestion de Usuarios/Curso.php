<?php
class Curso
{
    private int $documentoInstructor;
    private int $documentoAlumno;
    private int $matricula;
    private String $hora;
    private String $fecha;
    private String $tipoLibreta;
    private String $estado;
    private int $precio;


    public function __construct(int $documentoInstructor, int $documentoAlumno, int $matricula, String $hora, String $fecha, String $tipoLibreta, String $estado, int $precio)
    {
        $this->documentoInstructor = $documentoInstructor;
        $this->documentoAlumno = $documentoAlumno;
        $this->matricula = $matricula;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $this->tipoLibreta = $tipoLibreta;
        $this->estado = $estado;
        $this->precio = $precio;
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

    public function getEstado()
    {
        return $this->estado;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    /* Setters */

    public function setDocumentoInstructor(int $docIns)
    {
        $this->documentoInstructor = $docIns;
    }

    public function setDocumentoAlumno(int $docAl)
    {
        $this->documentoAlumno = $docAl;
    }

    public function setMatricula(int $mat)
    {
        $this->matricula = $mat;
    }

    public function setHora(String $hor)
    {
        $this->hora = $hor;
    }

    public function setFecha(String $fec)
    {
        $this->fecha = $fec;
    }

    public function setTipoLibreta(String $tipLib)
    {
        $this->tipoLibreta = $tipLib;
    }

    public function setEstado(String $est)
    {
        $this->estado = $est;
    }

    public function setPrecio(int $pre)
    {
        $this->precio = $pre;
    }


    /* To String */

    public function __toString()
    {
        return ($this->documentoInstructor . "," . $this->documentoAlumno . "," . $this->matricula . "," . $this->hora . "," . $this->fecha . "," . $this->tipoLibreta . "," . $this->estado . "," . $this->precio);
    }
}
