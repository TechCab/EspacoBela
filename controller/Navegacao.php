<?php
     if(isset($_POST["btnCadastrar"]))
     {
         require_once '../Controller/UsuarioController.php';
         $uController = new UsuarioController();
    
     if($uController->inserir($_POST["nome"], $_POST["email_cad"], $_POST["senha_cad"]))
     {
         include_once '../views/login.php';
     }
     else
     {
         include_once '../views/cadastroUsuario.php';
     }
 }
    else 
    {
        if(isset($_POST["btnLogin"]))
            {
                require_once '../Controller/UsuarioController.php';
            
                $uController = new UsuarioController();
                
                if($uController->login($_POST['email_cad'], $_POST['senha_cad']))
                {           
                    include_once '../views/agendamento.php';
                }
                else
                {
                    include_once '../views/login.php';
                }
            }
    }


?>