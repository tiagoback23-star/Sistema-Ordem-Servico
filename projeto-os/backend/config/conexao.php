<?php
try {
    $pdo = new PDO("pgsql:host=localhost;port=5432;dbname=projeto_integrador", "postgres", "1013");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(["status" => "erro", "mensagem" => "Erro na conexão: " . $e->getMessage()]));
}
?>
