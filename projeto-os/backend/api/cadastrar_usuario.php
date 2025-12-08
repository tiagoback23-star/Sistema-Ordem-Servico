<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$email = $dados['email'] ?? '';
$senha = $dados['senha'] ?? '';

if (empty($email) || empty($senha)) {
    echo json_encode(["status" => "erro", "mensagem" => "E-mail e senha são obrigatórios"]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
$stmt->execute([$email, $senha]);

echo json_encode(["status" => "sucesso", "mensagem" => "Usuário cadastrado com sucesso"]);
