<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuário</th>
      <th scope="col">Registro de Entrada</th>
      <th scope="col">Registro de Saída</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $mysqli = new mysqli();
    $user = ;
    $pass = ;
    $linha = ;

    ?>
    <tr>
      <th scope="row"><?php echo $linha?></th>
      <td><?php echo $user?></td>
      <td><?php /*adicionar uma variável para entrar o registro de entrada*/?></td>
      <td><?php/*adicionar uma variável para entrar o registro de saída*/?></td>
    </tr>
    
  </tbody>
  </table>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>