<?php
class servico {

    private $id;
    private $preco;
    private $descricao;
    private $tempo;

public function setID($id)
{
    $this-> id= $id;
}
public function getID()
{
    return $this->id;
}
public function setPreco($preco)
{
    $this-> preco= $preco;
}
public function getPreco()
{
    return $this->preco;
}
public function setDescricao($descricao)
{
    $this-> descricao= $descricao;
}
public function getDescricao()
{
    return $this->descricao;
}
public function setTempo($tempo)
{
    $this-> tempo= $tempo;
}
public function getTempo()
{
    return $this->tempo;
    }
}

?>