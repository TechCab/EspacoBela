<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro </title>
    <link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
    <div id="corpo-form">
    <h1>Cadastre o Serviço</h1>    
        <form method = "POST">
            <input type="text" name="nome_serv" required="required"  placeholder="Qual o nome do Serviço?"> 
            <input type="number" name="preco_serv" required="required" placeholder="Qual Preço?">
            <input type="number" name="tempo_serv" required="required"  placeholder="Qual o tempo de execução do serviço?"> 
            <input type="submit" value="Cadastrar">

            <a href="./controleAdm.php"> Voltar tela anterior</a><br>    
            <a href="../index.html"> Voltar para tela inicial <strong>aqui</a>
        </form>
    </div>
</body>
</html>
