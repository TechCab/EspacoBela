<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class ADMController{
    
    
    public function inserir($nome, $email, $senha) {
        
        require_once '../Model/Administrador.php';
        
        $administrador = new Administrador();
        $administrador->setNome($nome);
        $administrador->setEmail($email); 
        $administrador->setSenha($senha);    
        $r = $administrador->inserirBD();
        $_SESSION['administrador'] = serialize($administrador);
        return $r;     
    }

    public function login($email, $senha)
    {
        require_once '../Model/Administrador.php';
        $administrador = new Administrador();
        $administrador->carregarAdministrador($senha);
        if($administrador->getSenha() == $senha)
        {
            $_SESSION['administrador'] = serialize($administrador);
            return true;
        }
        else
        {
            return false;
        } 
    }
    
    public function gerarLista()
    {
        require_once '../model/Administrador.php';
        $administrador = new Administrador();

        return $results = $administrador->listaCadastrados();
    }
}
    



?>