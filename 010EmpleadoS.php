<?php
include_once "010PersonaS.php";
class Empleado extends Persona
{
    private $telefonos = [];
    private static $sueldoTope = 3333;

    public function __construct(
        String $nombre,
        String $apellidos,
        int $edad,
        private float $sueldo = 1000

    ) {
        parent::__construct($nombre, $apellidos, $edad);
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
        if ($this->sueldo > self::$sueldoTope && parent::getEdad() > 21) {
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
            return "La lista de telefonos está vacía";
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
    public static function toHtml(Persona $p): string
    {
        if ($p instanceof Empleado) {
            $telefonosLI = "";
            for ($i = 0; $i < count($p->getTelefonos()); $i++) {
                $telefonosLI .= "<li>" . $p->getTelefonos()[$i] . "</li>";
            }
            return "<p>" . parent::toHtml($p) . " </br>Sueldo: " .
                $p->getSueldo() . "€
        </p>
        <ol>$telefonosLI</ol>";
        }
    }
    public function __toString(): string
    {   
        // recupera el toString() del padre y añade sus propios atributos
        return parent::__toString() . 
        "Sueldo: " . $this->sueldo . "</br>
         Lista de telefonos: " . $this->listarTelefonos() . "</br>";
    }
}