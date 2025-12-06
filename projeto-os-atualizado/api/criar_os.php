<?php
header('Content-Type: application/json');
require_once(__DIR__ . '/../config/conexao.php');

// Recebe os dados enviados em JSON
$data = json_decode(file_get_contents('php://input'), true);

// Validação dos campos obrigatórios
if (!isset($data['id_cliente'], $data['data'], $data['defeito'], $data['status'])) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Dados incompletos'
    ]);
    exit;
}

$id_cliente = $data['id_cliente'];
$data_os   = $data['data'];   // continua recebendo "data" do JSON
$defeito   = $data['defeito'];
$status    = $data['status'];

try {
    // Inserção no banco (coluna correta: data_os)
    $sql = 'INSERT INTO ordem_servico (id_cliente, data_os, defeito, status)
            VALUES (:id_cliente, :data_os, :defeito, :status)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id_cliente' => $id_cliente,
        ':data_os'    => $data_os,
        ':defeito'    => $defeito,
        ':status'     => $status
    ]);

    // Retorno de sucesso
    $id_os = $pdo->lastInsertId();
    echo json_encode([
        'status'  => 'sucesso',
        'mensagem'=> 'Ordem de serviço criada com sucesso',
        'os' => [
            'id_os'     => $id_os,
            'id_cliente'=> $id_cliente,
            'data'      => $data_os,
            'defeito'   => $defeito,
            'status'    => $status
        ]
    ]);

} catch (PDOException $e) {
    echo json_encode([
        'status' => 'erro',
        'mensagem' => 'Erro no servidor: ' . $e->getMessage()
    ]);
}
