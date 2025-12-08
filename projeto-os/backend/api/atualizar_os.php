<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$id_os = $dados['id_os'] ?? null;
$status = $dados['status'] ?? null;

if (!$id_os || !$status) {
    echo json_encode(["status" => "erro", "mensagem" => "Dados incompletos"]);
    exit;
}

$stmt = $pdo->prepare("UPDATE ordens_servico SET status = ? WHERE id_os = ?");
$stmt->execute([$status, $id_os]);

echo json_encode(["status" => "sucesso", "mensagem" => "Status atualizado com sucesso"]);
