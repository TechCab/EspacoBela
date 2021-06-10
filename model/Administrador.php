<?php
    class Administrador
    {
         private $id;
         private $nome;
         private $email;
         private $senha;

    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
       public function getEmail()
    {
        return $this->email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function carregarAdministrador($id)
    {
        require_once 'ConexaoBD.php';   
        
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM administrador WHERE id =  ".$id ;
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if($r != null)
        {
            $this->id = $r->idadministrador;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->senha = $r->senha;
            $conn->close();
            return true;
        }
        else
        {
            $conn->close();
            return false;
        }
    }
    public function listaCadastrados()
    {
        require_once 'ConexaoBD.php';
    
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT idAdministrador, nome, id FROM administrador;" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>