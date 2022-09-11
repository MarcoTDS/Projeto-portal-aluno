<?php

session_start();
include("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tbDadosAluno WHERE usuario = '$usuario' AND senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);
$linhas = mysqli_num_rows($resultado);

if($linhas == 1){
    $_SESSION['usuario'] = $usuario;
    header("Location: ../templates/paginaAluno.php");  
}
else{
    header("Location: ../templates/index.php");
    echo "Usuário ou senha incorretos";
}

?>