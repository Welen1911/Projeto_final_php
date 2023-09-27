<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="nav bg-dark">
        <nav class="navbar text-white">
            <div class="md-5">Produtos</div>
        </nav>
    </nav>

    <form action="#" method="POST">
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nameInput">
        </div>
        <div class="mb-3">
            <label for="userInput" class="form-label">Username</label>
            <input type="text" class="form-control" id="userInput">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Check1">
            <label class="form-check-label" for="Check1">Admin</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="Check2">
            <label class="form-check-label" for="Check2">Comum</label>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>