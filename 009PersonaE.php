<?php
class Persona
{
    public function __construct(
        private String $nombre,
        private String $apellidos,
        //atributo edad añadido
        private int $edad
    ) {
    }
    //getter y setter de edad para consultar o modificar
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
}
