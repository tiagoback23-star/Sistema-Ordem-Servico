<?php
header('Content-Type: application/json');  // garante que a resposta seja JSON
require_once '../config/conexao.php';             // inclui a conexão com o banco

// Recebe os dados enviados pelo Postman (JSON)
$dados = json_decode(file_get_contents("php://input"), true);

$nome = $dados['nome'] ?? '';
$email = $dados['email'] ?? '';
$senha = $dados['senha'] ?? '';

// Validação simples
if(empty($nome) || empty($email) || empty($senha)) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Todos os campos são obrigatórios"
    ]);
    exit;
}

// Verifica se já existe usuário com esse e-mail
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "E-mail já cadastrado"
    ]);
    exit; // para a execução do script
}

// Insere novo usuário
$stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
if ($stmt->execute([$nome, $email, $senha])) {
    echo json_encode([
        "status" => "sucesso",
        "mensagem" => "Usuário cadastrado com sucesso"
    ]);
} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Falha ao cadastrar usuário"
    ]);
}
