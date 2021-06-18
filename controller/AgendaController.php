<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class AgendaController{
    
    
    public function inserir($hora, $servico, $data) {
        require_once '../model/agenda.php';
        $agenda = new Agenda();
        $agenda->setHora($hora);
        $agenda->setServico($servico); 
        $agenda->setData($data);     
        $r = $agenda->inserirBD();
        $_SESSION['agenda'] = serialize($agenda);
        return $r;     
    }

    public function gerarLista($id)
    {
        require_once '../model/agenda.php';
        $agenda = new Agenda();
        
        return $results = $agenda->listaAgendamento($id);
    }
    
}


?>
