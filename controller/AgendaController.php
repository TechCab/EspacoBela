<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class AgendaController{
    
    
    public function inserir($data, $hora) {
        require_once '../Model/agenda.php';
        $agenda = new Agenda();
        $agenda->setData($data);
        $agenda->setHora($hora);     
        $r = $agenda->inserirBD();
        $_SESSION['agenda'] = serialize($agenda);
        return $r;     
    }
}


?>
