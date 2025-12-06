<?php
header('Content-Type: application/json');
require_once('../config/conexao.php');

// Recebe JSON enviado pelo Postman
$dados = json_decode(file_get_contents("php://input"), true);

$email = $dados['email'] ?? '';
$senha = $dados['senha'] ?? '';

// Validação
if (empty($email) || empty($senha)) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "E-mail e senha são obrigatórios"
    ]);
    exit;
}

// Busca o usuário
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica existência
if (!$usuario) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Usuário não encontrado"
    ]);
    exit;
}

// Verifica senha (sem hash, igual seu sistema atual)
if ($usuario['senha'] !== $senha) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Senha incorreta"
    ]);
    exit;
}

// Sucesso
echo json_encode([
    "status" => "sucesso",
    "mensagem" => "Login realizado com sucesso",
    "usuario" => [
        "id_usuario" => $usuario['id_usuario'],
        "nome" => $usuario['nome'],
        "email" => $usuario['email']
    ]
]);
