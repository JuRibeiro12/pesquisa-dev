<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciando com PHP, seja bem-vindo</h1>
    <?php
     $user = $_GET['usuario'];
     $pass = $_GET['senha'];
     $retorno_user = '';
     $retorno_pass = '';
     if($user == "37646938866"){
         $retorno_user = 'Usuário Correto';
         if($pass == "123456789"){
             $retorno_pass = 'Senha Correta';
         }else{
             $retorno_pass = 'Senha Incorreta';
         }
     }else{
         $retorno_user = 'Usuário Incorreto';
     }
?>
<h2><?php echo $retorno_user;?></h2>
<h2><?php echo $retorno_pass;?></h2>
</body>
</html>