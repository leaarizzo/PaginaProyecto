<?php
class Vehiculo
{
    private String $matricula;
    private String $modelo;
    private String $motor;
    private String $combustible;
    private String $medida;
    private String $situacionActual;
    private int $kilometraje;
    private String $categoria;

    public function __construct(String $matricula, String $modelo, String $motor, String $combustible, String $medida, String $situacionActual, int $kilometraje, String $categoria)
    {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
        $this->motor = $motor;
        $this->combustible = $combustible;
        $this->medida = $medida;
        $this->situacionActual = $situacionActual;
        $this->kilometraje = $kilometraje;
        $this->categoria = $categoria;
    }

    /* Getters */

    public function getMatricula()
    {
        return $this->matricula;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getMotor()
    {
        return $this->motor;
    }
    public function getCombustible()
    {
        return $this->combustible;
    }
    public function getMedida()
    {
        return $this->medida;
    }
    public function getSituacionActual()
    {
        return $this->situacionActual;
    }
    public function getKilometraje()
    {
        return $this->kilometraje;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    /* Setters */

    public function setMatricula(String $matricula)
    {
        $this->matricula = $matricula;
    }

    public function setModelo(String $model)
    {
        $this->modelo = $model;
    }

    public function setMotor(String $motor)
    {
        $this->motor = $motor;
    }

    public function setCombustible(String $fuel)
    {
        $this->combustible = $fuel;
    }

    public function setMedida(String $length)
    {
        $this->medida = $length;
    }

    public function setSituacionActual(String $situacion)
    {
        $this->situacionActual = $situacion;
    }

    public function setKilometraje(int $km)
    {
        $this->kilometraje = $km;
    }

    public function setCategoria(String $category)
    {
        $this->categoria = $category;
    }


    /* To String */

    public function __toString()
    {
        return $this->matricula . "," . $this->modelo . "," . $this->motor . "," . $this->combustible . "," . $this->medida . "," . $this->situacionActual . "," . $this->kilometraje . "," . $this->categoria;
    }
}
