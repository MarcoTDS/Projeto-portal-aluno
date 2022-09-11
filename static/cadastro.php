<?php
include('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

if($nome == "" || $sobrenome == "" || $usuario == "" || $senha == "" || $telefone == "" || $cpf == ""){
    echo "Preencha todos os campos!";
    exit;
}
else{
    $sql = "INSERT INTO tbDadosAluno (nome, sobrenome, usuario, senha, cpf, contato) 
    VALUES ('$nome', '$sobrenome', '$usuario', '$senha', '$cpf', '$telefone')";
    $result = mysqli_query($conexao, $sql);
    if($result){
        header("Location: ../templates/index.php");
    }
    else{
        echo "Erro ao cadastrar!";
    }
}

?>