<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Administrador</title>
    <link rel="stylesheet"  href="../css/estilo1.css">
</head>
<body>
    <div id="corpo-form">
<h1>Entre como Administrador</h1>    

    <form action= "../controller/Navegacao.php" method = "POST">
       
        <input type="email" name="email_adm" required="required"  placeholder="E-mail"> 
        <input type="password"  name="senha_adm" required="required" placeholder="Senha">
        <input type="submit" name="btnLoginADM" value="Login"> 
  
        <a href="../views/cadastroADM.php"> Novo por aqui? <strong>Cadastre-se</a>
        <a href=""> Esqueceu senha? <strong>Recupere</a>
</form>
</div>
   
        
</body>
</html>