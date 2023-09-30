<?php 
  require('backend/adminSession.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Cadastro de produtos</title>
</head>
<body>
<nav class="nav bg-dark">
    <nav class="navbar text-white">
      <div class="md-5" style="margin-right: 10px;">Produtos</div>
    </nav>
  </nav>
  <br>
  <h3>Complete as informações abaixo para cadastrar o tipo:</h3></br>

  <form action="backend/createType.php" method="post">
  <div class="row g-3">
  <div class="col-sm-2">
    <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</div>
  </form>

</body>
</html>