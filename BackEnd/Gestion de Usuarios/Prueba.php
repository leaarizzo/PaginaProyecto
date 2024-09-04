<?php
require_once 'Curso.php';

class Prueba extends Curso
{
    private int $codigoPrueba;

    public function __construct(int $codigoPrueba, int $documentoInstructor, int $documentoAlumno, int $matricula, String $hora, String $fecha, String $tipoLibreta, String $estado, int $precio)
    {
        parent::__construct($documentoInstructor, $documentoAlumno, $matricula, $hora, $fecha, $tipoLibreta, $estado, $precio);

        $this->codigoPrueba = $codigoPrueba;
    }

    /* Getters */

    public function getCodigoPrueba()
    {
        return $this->codigoPrueba;
    }
    /* Setters */

    public function setCodigoPrueba(int $cp)
    {
        $this->codigoPrueba = $cp;
    }
}
