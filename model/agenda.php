<?php

class Servico {
    private $id;
    private $hora;
    private $data;
    private $status;
}
public function setID($id)
{
    $this->id = $id;
}
public function getID()
{
    return $this->id;
}
public function setHora($hora)
{
    $this->hora = $hora;
}
public function getHora()
{
    return $this->hora;
}
public function setData($data)
{
    $this->data = $data;
}
public function getData()
{
    return $this->data;
}
public function setStatus($status)
{
    $this->status = $status;
}
public function getStatus()
{
    return $this->status;
}
?> 
