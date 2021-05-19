<?php
class usuario {
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $tipo;
    private $ativo;
    private $datacadastro;
}  

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

 //tipo
    public function setTipo($tipo)
    {
        $this-> tipo= $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

//Ativo
    public function setAtivo($ativo)
    {
        $this-> ativo= $ativo;
    }
    public function getTipo()
    {
        return  $this->ativo;
    }
//Data de Cadastro

    public function setDatacadastro($datacadastro)
    {
        $this-> datacadastro= $datacadastro;
    }
    public function getDatacadastroo()
    {
        return $this->datacadastro;
    }




?>