<?php
class Persona
{
    public function __construct(
        private String $nombre,
        private String $apellidos,
    ) {
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
}
