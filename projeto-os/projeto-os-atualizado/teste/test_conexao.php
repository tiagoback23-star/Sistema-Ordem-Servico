<?php
require_once(__DIR__ . '/../config/conexao.php');
try {
    $stmt = $pdo->query("SELECT version()");
    $v = $stmt->fetchColumn();
    echo "Conexão OK. PostgreSQL version: " . htmlspecialchars($v);
} catch (Exception $e) {
    echo "Falha na conexão: " . htmlspecialchars($e->getMessage());
}
