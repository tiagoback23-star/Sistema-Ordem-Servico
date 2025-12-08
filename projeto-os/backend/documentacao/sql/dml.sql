-- Inserir usuários de teste
INSERT INTO usuarios (nome, email, senha)
VALUES 
('Tiago', 'tiagoback23@gmail.com', '1234'),
('Admin', 'admin@sistema.com', 'admin');

-- Inserir clientes de teste
INSERT INTO clientes (nome, email)
VALUES 
('Cliente A', 'clienteA@email.com'),
('Cliente B', 'clienteB@email.com');

-- Inserir ordens de serviço de teste
INSERT INTO ordens_servico (id_cliente, data_os, defeito, status)
VALUES 
(1, '2025-12-06', 'Computador não liga', 'Aberta'),
(2, '2025-12-07', 'Impressora não imprime', 'Em andamento');
