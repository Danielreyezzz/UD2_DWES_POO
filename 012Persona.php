<?php
class Persona
{
    public function __construct(
        protected String $nombre,
        protected String $apellidos,
        protected int $edad
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
}
