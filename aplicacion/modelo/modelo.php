<?php 

    class Modelo_conexion{

        public $conexion = NULL;

        public function __construct() 
        {
            $this->conexion =  new mysqli(BD_HOST,BD_USUARIO,BD_PASS ,BD_NOMBRE);

            if ($this->conexion->connect_error) {
                die('Hubo error en la conexion en :('.$this->conexion->connect_errno.')' .$this->conexion->connect_error );
            }
            $this->conexion->set_charset(BD_CHARSET);
        }
    }
