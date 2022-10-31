<?php
include_once "011PersonaA.php";
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
            /*Debemos llamar a la función getNombreCompleto desde nuesta instacia de Persona ($p)
            Esto es obligatorio ya que los metodos no estáticos no pueden ser llamados en metodos estáticos sin hacer una instancia del objeto */
            return "<p>" . $p->getNombreCompleto() .  " </br>Sueldo: " .
                $p->getSueldo() . "€
        </p>
        <ol>$telefonosLI</ol>";
        }
    }
    public function __toString(): string
    {   
        return parent::__toString() . 
        "Sueldo: " . $this->sueldo . "</br>
         Lista de telefonos: " . $this->listarTelefonos() . "</br>";
    }
}