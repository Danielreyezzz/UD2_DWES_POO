<?php

class EmpleadoConst
{
    private $telefonos = [];
    //Variable estática añadida
    private static $sueldoTope = 3333;

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
    public function getSueldoTope()
    {
        return $this->sueldoTope;
    }
    public function setSueldoTope($sueldoTope)
    {
        $this->sueldoTope = $sueldoTope;

        return $this;
    }
    public function getNombreCompleto(): string
    {
        return "Nombre: " . $this->nombre . "</br>
        Apellido: " . $this->apellidos;
    }
    public function debePagarImpuestos(): bool
    {
        //self:: para acceder a la variable dentro de la clase
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

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }
}
