<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $user = $_POST['usuario'];
     $pass = $_POST['senha'];
    if($user == "Juliana" && $pass == '123'){
        echo 'Usuário Autenticado';
    }else{
        echo 'Usuário Negado';
    }
    ?>
</body>
</html>