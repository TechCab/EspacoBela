<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
    <link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
    <div id="corpo-form">
<h1>Faça seu cadastro para agendar</h1>    
<form action= "../controller/Navegacao.php" method = "POST">
    <input type="nome" name="nome" required="required"  placeholder="Nome e Sobrenome">     
    <input type="email" name="email_cad" required="required"  placeholder="E-mail"> 
    <input type="password"  name="senha_cad" required="required" placeholder="Senha">
   
    <input type="submit" name="btnCadastrar" value="Cadastrar"> 
    
    <a href="login.php"> Já tem uma conta? <strong>Faça login aqui</a>
    <a href="index.html"> Voltar para tela inicial <strong>aqui</a>




</form>
</div>
   
</body>
</html>
