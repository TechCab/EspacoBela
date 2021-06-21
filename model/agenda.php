<?php

class Agenda {
    private $id;
    private $hora;
    private $data;
    private $usuario_id;
    private $servico;

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
        
        public function setUsuario_ID($usuario_id)
        {
            $this->usuario_id = $usuario_id;
        }
        public function getUsuario_ID()
        {
            return $this->usuario_id;
        }
       
        public function setServico($servico)
        {
            $this->servico = $servico;
        }
        public function getServico()
        {
            return $this->servico;
        }



        public function inserirBD()
        {
            require_once 'conexaoBD.php';   
            
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
    
            $sql = "INSERT INTO agenda (agenda_hora, servico, agenda_data, usuario_id)
            VALUES ('".$this->hora."', '".$this->servico."', '".$this->data."' , '".$this->usuario_id."' )";
    
            if ($conn->query($sql) === TRUE) {
                $this->id = mysqli_insert_id($conn);
                $conn->close();
                return TRUE;
                
            } 
            else 
            {
                $conn->close();
                return FALSE;	
            }
        }

        public function listaAgendamento()
        {
            require_once 'ConexaoBD.php';   
            
            $con = new ConexaoBD();
            $conn = $con->conectar();
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        
            $sql = "SELECT agenda_data, agenda_hora, servico, usuario_nome FROM agenda, usuario 
            WHERE agenda.usuario_id = usuario.usuario_Id " ;
            $re = $conn->query($sql);
            $conn->close();
            return $re;
            }  

    }


?> 
