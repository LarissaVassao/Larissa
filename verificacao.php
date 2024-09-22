<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Verificacao</title>
</head>
<body id="centro2">
    <?php  $usuario = 'Larissa';
            $senha = 'Abcd';
 
    if ( md5($_POST["senha_verificar"]) == md5($senha) && $usuario == $_POST["nome_verificar"]) {
      header('Location:principal.php');
      } else {
        echo "<h1> A senha ou o usuário estão incorretos.   <br> </h1>
         <form action='index.php' method='post' ><button type='submit' id='botao'>Ir para login</button></form> "; }
  
    ?>
</body>
</html>
 