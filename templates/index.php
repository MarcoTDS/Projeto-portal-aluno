
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Portal do aluno</title>
</head>
<body>
        <header class="header">
            <div class="navBar">
                <div class="mobile-menu">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
                <ul class="navList">
                    <li><a href="../templates/formCadastro.php">Cadastrar-se</a></li>
                </ul>
            

                <button class="btnLogin btn" onclick="showModal()"><a href="#">Login</a></button>

                    <div class="modal" id="modal">
                        <div class="modal-content">
                            <span class="close" onclick="hideModal()">&times;</span>
                            <h1 class="h1Login">Login</h1>
                            <div class="form-group">
                                <form method="post" action="../static/login.php">
                                    <div class="login">
                                        <label for="Usuário"><h1>Usuário</h1></label><br>
                                        <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                                    </div>
                                    <div class="login">
                                        <label for="senha"><h1>Senha</h1></label><br>
                                        <input type="password" class="form-control" name="senha" placeholder="Senha" >
                                    </div>
                                    <div >
                                        <input class="entrar" type='submit' value='Login'>
                                    </div>
                                </form>
                                <div class="cadastro">
                                    <p>Não possui conta, <a class="cadastro" href="../templates/formCadastro.php">Cadastre-se</a></p>
                                </div>
                            </div> 
                        </div>
                    </div>
            </div>
        </header>
        <section></section>
        <section></section>
        <footer>

        </footer>

        <script src="../static/navList.js"></script>
</body>
</html>