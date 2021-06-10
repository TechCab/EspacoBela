<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
    <div id="corpo-form">
<h1>Agende seu serviço</h1>    
<form method = "POST">
    <p>Escolha sua data preferida:</p>
    <input type="date" name="dataAgenda_client" required="required"  placeholder="Dia do agendamento"> 
    <p>Selecione o horário desejado</p>
	<select name="servico">
		<option>09:00</option>
		<option>10:00</option> 
		<option>11:00</option>
		<option>12:00</option>
        <option>14:00</option>
        <option>16:00</option>
        <option>17:00</option>
        <option>18:00</option>
        <option>19:00</option>
        <option>20:00</option>
	</select><br />
	<p>Qual serviço desejado?</p>
	<select name="servico">
		<option>Manicure</option>
		<option>Pedicure</option> 
		<option>Escova</option>
		<option>Depilação</option>
        <option>Sobrancelha</option>
        <option>Maquiagem</option>
        <option>Progressiva</option>
        <option>Alongamento</option>
        <option>Luzes</option>
	</select><br />
 
    <input type="submit" name="btnAgendar" value="Agendar"> 
    <a href="/views/index.html"> Voltar para tela inicial <strong>aqui</a>
</form>
</div>
</body>
</html>
