<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title>Confirmação de Agendamento</title>
  <link rel="stylesheet" href="../css/estilo1.css">
</head>

<body>
          <?php
          
          include_once '../controller/AgendaController.php';

          if(!isset($_SESSION)) 
              { 
                  session_start(); 
              }
          ?>

  <div id="corpo-form">
    <h1>Confirmação de Agendamento</h1>

    <div class="container">
    </div>
    <br>
    <table class="table">
      <thead>
        <tr>
        <th>Data</th>
          <th>Hora</th>
          <th>Serviço</th>
          <th>Cliente</th>
        </tr>
        <?php
                   
                   $fCon = new AgendaController();
                    $results = $fCon->gerarLista(unserialize($_SESSION['agenda'])->getID());
                    if($results != null)
                    
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td>'.$row->agenda_data.'</td>';
                        echo '<td>'.$row->agenda_hora.'</td>';
                        echo '<td>'.$row->servico.'</td>';
                        echo '<td>'.$row->usuario_nome.'</td>';
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
  
    <a href="../index.html"> Voltar para tela inicial</a>
  </div>
</body>
</html>