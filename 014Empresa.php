<?php
include_once("014EmpresaI.php");
class Empresa implements JSerializable
{
    private String $nombreEmpresa;
    private String $direccion;
    private $arrayTrabajadores = [];

    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }
    public function anyadirTrabajador(Trabajador $t)
    {
        $this->arrayTrabajadores[] = $t;
    }

    public function listarTrabajadoresHtml(): string
    {
        $listaTrabajadores = "";
        for ($i = 0; $i < count($this->arrayTrabajadores); $i++) {
            $listaTrabajadores .= "<li>" . $this->arrayTrabajadores[$i]->__toString() . "</li>";
        }
        return "<ol>$listaTrabajadores</ol>";
    }

    //Funciones requeridas por la interfaz
    public function toJSON(): string
    {
        foreach ($this as $key => $value) {

            $map[$key] = $value;
        }

        return json_encode($map);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}
