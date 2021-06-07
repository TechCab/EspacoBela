<?php

class ConexaoBD{

    private $serveName = "localhost";
    private $userName = "root";
    private $password = "usbw";
    private $dbName = "salao1";

    public function conectar()
    {
        $conn = new msqli($this->serverName, $this->$userName, $this->$password, $this->$dbName);
        return $conn;
    }

}
?>