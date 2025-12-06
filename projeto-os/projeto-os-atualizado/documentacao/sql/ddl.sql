-- Criação da tabela de usuários
CREATE TABLE usuarios (
    id_usuario SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Criação da tabela de ordens de serviço
CREATE TABLE ordem_servico (
    id_os SERIAL PRIMARY KEY,
    id_cliente INT NOT NULL,
    data_os DATE NOT NULL,
    defeito TEXT NOT NULL,
    status VARCHAR(50) NOT NULL,
    CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES usuarios(id_usuario)
);
