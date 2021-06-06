<?php
class usuario {
    private $id;
    private $nome;
    private $senha;
    private $email;
    
    //ID
    public function setID($id)
    {
        $this-> id= $id;
    }
    public function getID()
    {
        return $this->id;
    }

    //Nome
    public function setNome($nome)
    {
        $this-> nome= $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    //Senha

    public function setSenha($senha)
        {
            $this-> senha= $senha;
        }
        public function getSenha()
        {
            return $this->senha;
        }

    //Email

    public function setEmail($email)
        {
            $this-> email= $email;
        }
        public function getEmail()
        {
            return $this->email;
        }
} 

?>