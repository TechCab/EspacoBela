<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
    <div id="corpo-form">
<h1>Entre para Agendar</h1>    

    <form action= "../controller/Navegacao.php" method = "POST">
       
        <input type="email" name="email_cad" required="required"  placeholder="E-mail"> 
        <input type="password"  name="senha_cad" required="required" placeholder="Senha">
        <input type="submit" name="btnLogin" value="Login"> 
  
        <a href="cadastroUsuario.php"> Novo por aqui? <strong>Cadastre-se</a><br>
        <a href=""> Esqueceu senha? <strong>Recupere</a><br>
        <a href="../index.html"> Voltar para tela inicial</a<br>
    </form>
</div>
        
</body>
</html>