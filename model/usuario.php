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
         
        
        //Métodos Banco de Dados
            public function inserirBD()
            {
                require_once 'conexaoBD.php';   
                
                $con = new ConexaoBD();
                $conn = $con->conectar();
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "INSERT INTO usuario (usuario_nome, usuario_senha, usuario_email)
                VALUES ('".$this->nome."', '".$this->senha."','".$this->email."')";

                if ($conn->query($sql) === TRUE) {
                    $this->id = mysqli_insert_id($conn);
                    $conn->close();
                    return TRUE;
                    
                } 
                else 
                {
                    $conn->close();
                    return FALSE;	
                }
            }
           
           
           
            public function carregarUsuario($cpf)
            {
                require_once 'ConexaoBD.php';   
                
                $con = new ConexaoBD();
                $conn = $con->conectar();
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
        
                $sql = "SELECT * FROM usuario WHERE cpf =  ".$cpf ;
                $re = $conn->query($sql);
                $r = $re->fetch_object();
                if($r != null)
                {
                    $this->id = $r->idusuario;
                    $this->nome = $r->nome;
                    $this->email = $r->email;
                    $this->cpf = $r->cpf;
                    $this->dataNascimento = $r->dataNascimento;
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
        
    } 

?>