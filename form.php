<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuário</label>
    <input type="text" class="form-control" name='usuario' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nós nunca compartilharemos o seu email com ninguém</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name='senha' class="form-control">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>