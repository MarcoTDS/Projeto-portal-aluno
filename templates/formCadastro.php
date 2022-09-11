
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Cadastro</title>
</head>
<body>
    <header class="header">
        <div class="navBar">
            <ul class="navList">
                <li><a href="#">Cadastre seus dados</a></li>
            </ul>
        </div>
    </header>
    <form action="../static/cadastro.php" method="post">
        <div class="container">
            <div class="row">
                <div class="label">
                    <label for="nome">Nome</label>              
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="sobrenome">Sobrenome</label>               
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Digite seu sobrenome">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="usuario">Usuário</label>               
                    <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="senha">Senha</label>                
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="confirmarSenha">Confirmar senha</label>                
                    <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Confirme sua senha">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone">
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label for="cpf">CPF</label>
                    <input type="number" name="cpf" id="cpf" placeholder="Digite seu CPF">
                </div>
            </div>
            <input type="submit" class="btn" name="cadastrar" value="cadastrar">
        </div>
    </form>
    <footer>

    </footer>
</body>
</html>
