<?php

class Empresa
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
    //Funcion para añadir una trabajador
    public function anyadirTrabajador(Trabajador $t){
        $this->arrayTrabajadores[] = $t;
    }
    //Funcion para calcular el las nóminas totales
    public function getCosteNominas(): float
    {
        $nominas = 0;
        foreach ($this->trabajadores as $t) {
            $nominas += $t->calcularSueldo();
        }
        return $nominas;
    }
    
    /*Función que imita el toHtml()
    En este caso la cadena se rellena llamando a un __toString() que hemos creado tanto en la clase Empleado como en la Gerente
    Este toString nos facilitará la inserción y nos dará más control sobre el aspecto de lo mostrado
    */
    public function listarTrabajadoresHtml() : string{
            $listaTrabajadores = "";
            for ($i = 0; $i < count($this->arrayTrabajadores); $i++) {
                $listaTrabajadores .= "<li>" . $this->arrayTrabajadores[$i]->__toString() . "</li>";
            }
            return "<ol>$listaTrabajadores</ol>";
        }
    
    }