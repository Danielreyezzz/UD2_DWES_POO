<?php
include_once "007Persona.php";
class Empleado extends Persona
{
    //Le he pasado a Empleado los parametros que no estan incluidos en Persona
    private $telefonos = [];
    private static $sueldoTope = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        private float $sueldo = 1000,

    ) {
        //El constructor del padre(Persona), pasandole por parámetro las variables de este
        parent::__construct($nombre, $apellidos);
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;

        return $this;
    }

    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > self::$sueldoTope) {
            return true;
        }
        return false;
    }
    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }
    public function listarTelefonos(): string
    {
        if (empty($this->telefonos)) {
            return "La lista está vacía";
        }
        return implode(", ", $this->telefonos);
    }

    public function getTelefonos(): array
    {
        return $this->telefonos;
    }

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }   

    // La clase toHTML entra en conflicto con el 008, así que ha sido suprimida
}
