<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="../css/estilo1.css">
    <title>Lista de Administradores</title>
</head>
<body>

<?php

        include_once '../model/Administrador.php';
        include_once '../controller/AdmController.php';

        if(!isset($_SESSION))
        {
            session_start();
        }
?>
        <div id="corpo-form">
        <h1>Administradores Cadastrados</h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
        </tr>

        <?php
                   
                   $fCon = new ADMController();
                    $results = $fCon->gerarLista();
                    if($results != null)
                    
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td>'.$row->idAdministrador.'</td>';
                        echo '<td>'.$row->nome.'</td>';
                        echo '<td>'.$row->email.'</td>';                        
                        echo '<td>';                       
                        echo '</tr>';
                    } 
        
        ?>
      </thead>
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
    <a href="./controleAdm.php"> Voltar tela anterior</a><br>
    <a href="../index.html"> Voltar para tela inicial</a>

</body>
</html>