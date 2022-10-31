<?php
//la clase ahora es abstracta
abstract class Persona
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
    /*Ahora la clase toHtml es abstracta, 
    por lo tanto debe ser definida en sus hijos si no queremos un pedazo de fatal error
    */
    abstract static function toHtml(Persona $p): string;
    
    public function __toString(): string
    {
        return "Nombre: " .  $this->nombre . "</br>" .
            "Apellidos: " .  $this->apellidos . "</br>"  .
            "Edad: " . $this->edad . "</br>";
    }
}