<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr> 
        <th>#</th>
        <th>Usuário</th>
        <th>Registro</th>
    </tr>
  </thead>
  <tbody>
<?php
$mysqli = new mysqli('localhost:3307', 'root', '', 'teste1');
$user = $_POST['usuario'];
$pass = $_POST['senha'];
$result = $mysqli->query("SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass';");
/* echo "SELECT * FROM usuarios WHERE usuario = $user AND senha = $pass;"; */
/* printf("Select returned %d rows.\n", $result->num_rows); */
if($result->num_rows == 1){
    echo 'Usuário Autenticado <br>';
    $usuario = $result->fetch_array();
    $isercao =  "INSERT INTO ponto (id_usuario) VALUES (" . $usuario['id'] . ");";
    $mysqli->query($isercao);
    $result2 = $mysqli->query("SELECT * FROM ponto WHERE id_usuario = " . $usuario['id'] . ";");
    while ($ponto = $result2->fetch_array()){
        ?>
    <tr> 
        <td><?php echo $ponto['id']?></td>
        <td><?php echo $ponto['id_usuario']?></td>
        <td><?php echo $ponto['registro']?></td>
    </tr>
        <?php
    }
}else{
    echo 'Usuário Negado';
}
while ($usuario = $result->fetch_array()){
    echo "Seja bem vindo " . $usuario['nome'];
 }
    /*  $user = $_POST['usuario'];
     $pass = $_POST['senha'];
    if($user == "Juliana" && $pass == '123'){
        echo 'Usuário Autenticado';
    }else{
        echo 'Usuário Negado';
    } */
    ?>

  </tbody>
</table>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>