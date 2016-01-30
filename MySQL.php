<?php

class MySQL {

    private $conexion;

    public function connect()
    {
        $this->conexion = new mysqli('localhost', 'root', 'root', 'people');

        if ($this->conexion->connect_errno) {
            die('Falló la conexión: '. $this->conexion->connect_errno);
        }

        $this->conexion->set_charset('utf8');
    }

    public function query($sql)
    {
        $results = $this->conexion->query($sql);

        if ($this->conexion->error) {
            die('Error en la consulta: ' . $this->conexion->error);
        }

        return $results;
    }

    public function close()
    {
        $this->conexion->close();
    }
}
