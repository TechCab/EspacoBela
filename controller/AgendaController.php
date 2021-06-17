<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class AgendaController{
    
    
    public function inserir($hora, $data) {
        require_once '../Model/agenda.php';
        $agenda = new Agenda();
        $agenda->setHora($hora);
        $agenda->setData($data);     
        $r = $agenda->inserirBD();
        $_SESSION['agenda'] = serialize($agenda);
        return $r;     
    }
}


?>
