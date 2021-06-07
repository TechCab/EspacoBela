<?php

class ConexaoBD{
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "usbw";
    private $dbname = "salao1";

    public function conectar()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        return $conn;
    }   

}

?>