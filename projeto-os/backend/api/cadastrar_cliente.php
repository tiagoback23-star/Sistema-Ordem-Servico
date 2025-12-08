<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$nome = $dados['nome'] ?? '';
$email = $dados['email'] ?? '';

if (empty($nome) || empty($email)) {
    echo json_encode(["status" => "erro", "mensagem" => "Nome e e-mail são obrigatórios"]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
$stmt->execute([$nome, $email]);

echo json_encode(["status" => "sucesso", "mensagem" => "Cliente cadastrado com sucesso"]);
