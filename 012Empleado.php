<?php
include_once "012Trabajador.php";

class Empleadito extends Trabajador{

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        $telefonos = [],
        private int $horasTrabajadas,
        private float $precioPorHora

    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
    }

    public function calcularSueldo()
    {
        return $this->horasTrabajadas * $this->precioPorHora;
    }
}