<?php
$servidor = "localhost";
$usuario = "root";
$senha = "Home@spSENAI2025!";
$banco = "sistema_db";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$sql = $conexao->prepare(
    "INSERT INTO clientes (nome, idade, cpf, endereco) VALUES (?, ?, ?, ?)"
);

$sql->bind_param("siss", $_POST['nome'], $_POST['idade'], $_POST['cpf'], $_POST['endereco']);

if ($sql->execute()) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar!";
}

$conexao->close();
?>