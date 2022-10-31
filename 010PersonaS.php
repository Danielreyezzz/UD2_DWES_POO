<?php
class Persona
{
    public function __construct(
        private String $nombre,
        private String $apellidos,
        private int $edad
    ) {
    }

    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }
    public function getNombreCompleto(): string
    {
        return "Nombre: " . $this->nombre . "</br>
         Apellido: " . $this->apellidos;
    }
    public static function toHtml(Persona $p): string
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }
    //toString() añadido
    public function __toString(): string
    {
        return "Nombre: " .  $this->nombre . "</br>" .
            "Apellidos: " .  $this->apellidos . "</br>"  .
            "Edad: " . $this->edad . "</br>";
    }
}
