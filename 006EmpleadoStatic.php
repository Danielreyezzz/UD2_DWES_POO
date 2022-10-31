    <?php
    class Empleado
    {
        private $telefonos = [];
        private static $sueldoTope = 3333;

        public function __construct(
            private String $nombre,
            private String $apellidos,
            private float $sueldo = 1000,

        ) {
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

            if ($this->sueldo > self::$sueldoTope) {
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
        //getter de telefonos
        public function getTelefonos(): array
        {
            return $this->telefonos;
        }

        public function vaciarTelefonos(): void
        {
            unset($this->telefonos);
        }

        /*Funcion para pasar valores a parrafo y lista html
        Creo un String vacío y le concateno los resultados de un for que recorre el array de teléfonos
        El parrafo de nombre y apellidos lo relleno reutilizando la función getNombreCompleto()*/
        public function toHtml(Empleado $emp): string
        {
            $telefonosLI = "";
            for ($i=0; $i < count($this -> getTelefonos()); $i++) { 
                $telefonosLI .= "<li>" . $this -> getTelefonos()[$i] . "</li>";
            }
            return "<p>" . $this -> getNombreCompleto() . " </br>Sueldo: " .
                $this -> getSueldo() . "€
        </p>
        <ol>$telefonosLI</ol>";
        }
    }
