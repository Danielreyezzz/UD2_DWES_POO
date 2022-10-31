<?php
include_once "012Trabajador.php";

class Gerente extends Trabajador{

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        $telefonos = [],
        private int $salario,

    ) {
        parent::__construct($nombre, $apellidos, $edad, $telefonos);
    }

    public function calcularSueldo()
    {
        return $this->salario + ($this->salario * ($this->edad / 100));
    }
    public function listarTelefonos(): string
    {
        if (empty($this->telefonos)) {
            return "La lista de telefonos está vacía";
        }
        return implode(", ", $this->telefonos);
    }
    public function __toString(): string
    {
        return "Nombre: " .  $this->nombre . "</br>" .
            "Apellidos: " .  $this->apellidos . "</br>"  .
            "Edad: " . $this->edad . "</br>" .
            "Telefonos: " . $this->listarTelefonos() . "</br>" . 
            "Sueldo: " . $this->calcularSueldo() . "</br>" ;
    }
}