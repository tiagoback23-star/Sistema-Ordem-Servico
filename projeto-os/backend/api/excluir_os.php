<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$id_os = $dados['id_os'] ?? null;

if (!$id_os) {
    echo json_encode(["status" => "erro", "mensagem" => "ID da OS é obrigatório"]);
    exit;
}

$stmt = $pdo->prepare("DELETE FROM ordens_servico WHERE id_os = ?");
$stmt->execute([$id_os]);

echo json_encode(["status" => "sucesso", "mensagem" => "OS excluída com sucesso"]);
