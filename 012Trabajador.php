<?php
include_once "012Persona.php";
abstract class Trabajador extends Persona
{
    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        private $telefonos = []

    ) {
        parent::__construct($nombre, $apellidos, $edad);
    }

    abstract function calcularSueldo();

    public function debePagarImpuestos(): bool
    {
        if (parent::getEdad() > 21) {
            return true;
        }
        return false;
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
            "Telefonos: " . $this->listarTelefonos() . "</br>";
    }
}
