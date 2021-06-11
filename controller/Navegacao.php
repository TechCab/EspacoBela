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
            else 
            {
                if(isset($_POST["btnCadastrarADM"]))
                    {
                        require_once '../Controller/Admcontroller.php';
                    
                        $uController = new ADMController();
                        
                        if($uController->inserir($_POST["nomeADM"], $_POST['email_ADM'], $_POST['senha_ADM']))
                        {           
                            include_once '../views/loginADM.php';
                        }
                        else
                        {
                            include_once '../views/cadastroADM.php';

                        }
                    }
                    else 
                    {
                        if(isset($_POST["btnLoginADM"]))
                            {
                                require_once '../Controller/AdmController.php';
                            
                                $uController = new ADMController();
                                
                                if($uController->login($_POST['email_adm'], $_POST['senha_adm']))
                                {           
                                    include_once '../views/controleAdm.php';
                                }
                                else
                                {
                                    include_once '../views/loginADM.php';
                                }
                            }
                        }                       
                    }
                }
?>