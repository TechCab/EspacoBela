<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class UsuarioController{
    
    
    public function inserir($nome, $email,$senha) {
        require_once '../Model/usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email); 
        $usuario->setSenha($senha);    
        $r = $usuario->inserirBD();
        $_SESSION['usuario'] = serialize($usuario);
        return $r;     
    }

    public function login($email, $senha)
    {
        require_once '../Model/usuario.php';
        $usuario = new usuario();
        $usuario->carregarUsuario($senha);
        if($usuario->getSenha() == $senha)
        {
            $_SESSION['usuario'] = serialize($usuario);
            return true;
        }
        else
        {
            return false;
        } 
    }

}

?>