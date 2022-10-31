<?php

class Empleado
{
    private $telefonos = [];
    //Constructor
    public function __construct(
        private String $nombre,
        private String $apellidos,
        private float $sueldo = 1000,

    ) {
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

    public function getNombreCompleto(): string
    {
        return "Nombre: " . $this->nombre . "</br>
        Apellido: " . $this->apellidos;
    }
    public function debePagarImpuestos(): bool
    {
        if ($this->sueldo > 3333) {
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

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }
}
