<?php

class Empleado
{
    private String $nombre;
    private String $apellidos;
    private float $sueldo;
    //Array de telefonos añadido
    private $telefonos = [];

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
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
    //Funciones requeridas por el enunciado 002
    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }
    public function listarTelefonos(): string
    {
        if (empty( $this->telefonos)) {
            return "La lista está vacía";
        }
        return implode(", " , $this->telefonos);
    }

    public function vaciarTelefonos(): void
    {
        unset($this->telefonos);
    }
}
