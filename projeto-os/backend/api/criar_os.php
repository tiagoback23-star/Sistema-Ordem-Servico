<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$dados = json_decode(file_get_contents("php://input"), true);
$id_cliente = $dados['id_cliente'] ?? null;
$data_os = $dados['data_os'] ?? null;
$defeito = $dados['defeito'] ?? null;
$status = $dados['status'] ?? null;

if (!$id_cliente || !$data_os || !$defeito || !$status) {
    echo json_encode(["status" => "erro", "mensagem" => "Dados incompletos"]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO ordens_servico (id_cliente, data_os, defeito, status) VALUES (?, ?, ?, ?)");
$stmt->execute([$id_cliente, $data_os, $defeito, $status]);

echo json_encode(["status" => "sucesso", "mensagem" => "OS criada com sucesso"]);
