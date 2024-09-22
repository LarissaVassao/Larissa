<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Login</title>
</head>
 
<body id="centro">
    <form action="verificacao.php" method="post">
        <h1>Login - Planilha 🔒</h1>
        <hr>
        <div>
            <br>
            <label>Nome: </label>
            <input type="text" name="nome_verificar">
        </div>
        <br>
        <div>
            <label>Senha: </label>
            <input type="password" name="senha_verificar">
        </div>
        <br>
        <button type="submit">Confirmar</button>
        <br>
        <br>
        <hr>
    </form>
   
 
</body>
 
</html>