<?php 
  require('backend/getId.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Produtos disponíveis</title>
</head>

<body>
  <nav class="nav bg-dark">
    <nav class="navbar text-white">
      <div class="md-5" style="margin-right: 10px;">Produtos</div>
      <?php 
        if ($user->tipo == 'admin') {
      ?>
      <div class="md-5">
          <?php echo $user->nome;?>
      </div>
      <div class="md-5">
        <a href="Cadastro_produtos.php" class="btn btn-primary">Admin</a>
      </div>
      <?php }?>
      <div class="md-5">
        <a href="backend/logout.php" class="btn btn-primary">Logout</a>
      </div>
    </nav>
  </nav>

  <?php if($products != '') { $cont = 1?>
    <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Tipo_ID</th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach($products as $product) {?>
        <tr>
        <th scope="row"><?php echo $cont?></th>
        <td><?php echo $product[1]?></td>
        <td><?php echo $product[2]?></td>
        <td><?php echo $product[3]?></td>
        <td><?php echo $product[4]; $cont++?></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  <?php } else {?>
    <h1>Não tem produtos disponíveis!</h1>
  <?php }?>

</body>

</html>