<?php
$host = 'localhost';       
$port = '5432';            
$dbname = 'projeto_integrador';    //  nome do banco de dados
$user = 'postgres';               // usuario do PostgreSQL
$password = '1013';              // senha do usuario

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
