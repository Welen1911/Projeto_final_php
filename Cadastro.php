<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="teste.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body >

    <div class="conteudo-cadastro">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>Cadastro</h1>
                </div>
            </div>
        </div>
    
    
       
            <form action="#" method="POST" class="row g-3 d-flex justify-content-center">
                <div class="col-10 form-floating" >
                    <input class="form-control bg-secondary-subtle" type="text" placeholder="name@example.com"  id="nameInput" name="nome">
                    <label for="nameInput">Nome</label>
                </div>

                <div class="col-10 form-floating ">
                    <input class="form-control bg-secondary-subtle" type="text" placeholder="Digite seu Username" id="userInput" name="username">
                    <label for="userInput" class="form-label">Username</label>
                </div>

                <div class="col-md-5 form-floating">
                    <input type="email" class="form-control bg-secondary-subtle" placeholder="Digite seu email" id="exampleInputEmail1" name="email">
                    <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
                </div>
                <div class="col-md-5 form-floating">
                    <input type="password" class="form-control bg-secondary-subtle" placeholder="Digite sua senha" id="exampleInputPassword1" name="senha">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                </div>

                <div class="form-check col-md-5">
                    <input class="form-check-input border-3 border-primary-subtle rounded-4" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Conta Adiministrador
                    </label>
                </div>

                <div class="form-check col-md-4">
                    <input class="form-check-input border-3 border-primary-subtle rounded-4" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Conta Comum
                    </label>
                </div>

                <div class="col-10">
                <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                </div>
            </form>  
    </div>
</body>
</html>