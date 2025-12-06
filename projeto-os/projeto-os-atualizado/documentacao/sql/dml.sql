-- Inserindo usuários de teste
INSERT INTO usuarios (nome, email, senha)
VALUES 
('Tiago', 'admin@email.com', '1013'),
('Maria Silva', 'maria@email.com', 'senha123'),
('João Souza', 'joao@email.com', 'abc123');

-- Inserindo ordens de serviço de teste
INSERT INTO ordem_servico (id_cliente, data_os, defeito, status)
VALUES
(1, '2025-12-06', 'Notebook não liga', 'Aberta'),
(2, '2025-12-06', 'Celular com tela quebrada', 'Em andamento'),
(3, '2025-12-06', 'Impressora não imprime', 'Concluída');
