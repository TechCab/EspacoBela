<?php
class cliente {

    private $id;
    private $nome;
    private $senha;
    private $email;
    private $datanasc;
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

//Data de Nascimento

public function setDatanasc($datanasc)
{
    $this-> datanasc= $datanasc;
}
public function getDatanasc()
{
    return $this->datanasc;
}

//Data de Cadastro

public function setDatacadastro($datacadastro)
{
    $this-> datacadastro= $datacadastro;
}
public function getDatacadastro()
{
    return $this->datacadastro;
}

public function inserirBD()
{
    require_once 'conexaoBD.php';

    $con = new ConexaoBD();
    $conn = $con->conectar();
    if ($conn->connect_error) {
        die ("connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO cliente (cliente_Id, cliente_nome, cliente_senha , cliente_email, cliente_data_nasc, cliente_data_cadastro)
            values ('".$this->id."', '".$this->nome."', '".$this->senha."', '".$this->email."', '".$this->datanasc."', '".$this->datacastro."')";
            
    if ($conn->query($sql)=== true) {
        $this->id = mysqli_insert_id($conn);
        $conn->close();
        return true;
    } 
        else {
            $conn->close();
            return false;
        }
    } 


?>