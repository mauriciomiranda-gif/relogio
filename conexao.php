
<?php

$servidor = "localhost";
$usuario = "root";
$senha = "Home@spSENAI2025!";
$banco = "sistema_db";

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>
