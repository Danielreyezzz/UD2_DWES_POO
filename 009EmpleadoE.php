<?php
include_once "009PersonaE.php";
class Empleado extends Persona
{
    private $telefonos = [];
    private static $sueldoTope = 3333;
    //Edad añadida al constructor padre
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
    {   //La función ahora recoge el getEdad() del padre para comprobar
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
}
