<?php
require_once('../config/conexao.php');
header('Content-Type: application/json');

$stmt = $pdo->query("SELECT * FROM ordens_servico ORDER BY id_os DESC");
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($lista)