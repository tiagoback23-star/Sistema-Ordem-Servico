-- Criação da tabela de usuários
CREATE TABLE usuarios (
  id_usuario SERIAL PRIMARY KEY,
  nome VARCHAR(100), 
  email VARCHAR(100) UNIQUE NOT NULL,
  senha VARCHAR(100) NOT NULL
);


-- Criação da tabela de clientes
CREATE TABLE clientes (
  id_cliente SERIAL PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL
);

-- Criação da tabela de ordens de serviço
CREATE TABLE ordens_servico (
  id_os SERIAL PRIMARY KEY,
  id_cliente INT NOT NULL REFERENCES clientes(id_cliente),
  data_os DATE NOT NULL,
  defeito TEXT NOT NULL,
  status VARCHAR(20) NOT NULL
);
