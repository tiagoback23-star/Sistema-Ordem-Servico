<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$email = $dados['email'] ?? '';
$senha = $dados['senha'] ?? '';

if (empty($email) || empty($senha)) {
    echo json_encode(["status" => "erro", "mensagem" => "E-mail e senha são obrigatórios"]);
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    echo json_encode(["status" => "erro", "mensagem" => "Usuário não encontrado"]);
    exit;
}

if ($usuario['senha'] !== $senha) {
    echo json_encode(["status" => "erro", "mensagem" => "Senha incorreta"]);
    exit;
}

echo json_encode([
    "status" => "sucesso",
    "mensagem" => "Login realizado com sucesso",
    "usuario" => [
        "id_usuario" => $usuario['id_usuario'],
        "nome" => $usuario['nome'],
        "email" => $usuario['email']
    ]
]);
