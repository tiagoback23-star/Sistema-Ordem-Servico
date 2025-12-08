# Projeto Integrador – Sistema de Ordens de Serviço

**Instituição:** UCEFF  
**Curso:** Análise e Desenvolvimento de Sistemas  
**Aluno:** Tiago Back  
**Professor:** Caio Vinicio Koch dos Santos  
**Semestre:** 2025/2  

---

## 📖 Apresentação do Projeto
Este projeto tem como objetivo desenvolver um **Sistema Web de Gestão de Ordens de Serviço**, integrando **frontend, backend e banco de dados**.  
A aplicação permite o cadastro de usuários, clientes e ordens de serviço, além de funcionalidades de consulta, atualização e exclusão.

O desenvolvimento envolveu a aplicação de conceitos de:
- Arquitetura web  
- Integração entre frontend e backend  
- Criação e consumo de APIs em PHP  
- Manipulação de banco de dados relacional  
- Usabilidade e interface  

---

## 🧪 Testes de Funcionalidades
O sistema foi implementado e testado em ambiente local via **XAMPP (Apache + PHP + MariaDB)** e servidor embutido do PHP.

Esta entrega final contém:
- Aplicação funcional  
- Prints de tela  
- Diagramas MER e UML  
- Documentação técnica  
- Código-fonte organizado  
- Produção científica  

---

## ❌ Problema
Muitas pequenas empresas enfrentam dificuldades no controle de ordens de serviço.  
A ausência de um sistema automatizado gera problemas como:
- Falta de histórico  
- Perda de informações  
- Dificuldade de acompanhamento  
- Falhas no controle de clientes e status  

---

## ✅ Justificativa
O desenvolvimento de um sistema de ordens de serviço contribui para:
- Organização interna  
- Melhor atendimento ao cliente  
- Redução de falhas operacionais  
- Centralização das informações  
- Apoio à tomada de decisão  

---

## 🎯 Objetivos

### Objetivo Geral
Desenvolver um sistema web para gerenciamento de ordens de serviço, com cadastro de clientes, usuários e controle de status.

### Objetivos Específicos
- Criar uma aplicação web integrada (frontend + backend + banco de dados)  
- Desenvolver APIs em PHP para login e operações de CRUD  
- Implementar e documentar o MER  
- Realizar testes de funcionalidade e integração  
- Elaborar documentação com prints, diagramas e código-fonte  
- Produzir artigo científico orientado  

---

## 📌 Delimitação
O sistema **não contempla**:
- Controle financeiro  
- Estoque  
- Integração com sistemas fiscais  
- Dashboard administrativo avançado  

O foco é exclusivamente a **gestão de ordens de serviço e clientes**.

---

## 📅 Planejamento
- **Dia 1:** Planejamento geral do projeto  
- **Dia 2:** Criação MER e Banco de Dados  
- **Dia 3:** Desenvolvimento da Tela de Login  
- **Dia 4:** Cadastro de Clientes  
- **Dia 5:** Cadastro de Ordens de Serviço  
- **Dia 6:** Consulta e Atualização  
- **Dia 7:** Testes Finais e Entrega  

Todos os passos foram registrados por meio de prints de tela e evidências no repositório GitHub.

---

## ⚙️ Desenvolvimento do Sistema

### Requisitos Funcionais
- RF01 – Realizar login de usuários  
- RF02 – Cadastrar clientes  
- RF03 – Criar ordens de serviço  
- RF04 – Listar ordens  
- RF05 – Atualizar status  
- RF06 – Excluir ordens  

### Requisitos Não Funcionais
- Linguagens: PHP, JavaScript, HTML, CSS  
- Banco de dados: MySQL / MariaDB  
- Plataforma: XAMPP ou servidor nativo do PHP  

---

## 📊 Diagramas
- **Caso de Uso:** Login, Cadastro de Cliente, Cadastro de OS, Consulta de OS, Atualização de Status  
- **Sequência:** Fluxo do login, Fluxo de criação de OS  
- **MER:**  
  - Entidades: USUARIO, CLIENTE, ORDEM_SERVICO  
  - Relacionamentos:  
    - Usuário cria ordens → 1:N  
    - Cliente possui ordens → 1:N  

---

## 🗄️ Banco de Dados
Scripts DDL e DML implementados para:
- Criação das tabelas  
- Chaves estrangeiras  
- Inserts de teste  

---

## 🖥️ Prototipação de Telas
- Tela de login  
- Tela de cadastro de cliente  
- Tela de cadastro de usuário  
- Tela de criação de ordens  
- Tela de listagem  

---

## 💻 Código-Fonte

### Backend (PHP)
- `login.php` – valida usuário  
- `cadastrar_usuario.php` – cria novos usuários  
- `cadastrar_cliente.php` – cria cliente  
- `criar_os.php` – cria OS  
- `listar_os.php` – retorna OS  
- `atualizar_os.php` – altera status  
- `excluir_os.php` – remove OS  
- `config.php` – responsável pela conexão  

### Frontend (HTML/CSS/JS)
- `index.html` – tela de login  
- `cadastro_usuario.html` – cadastro  
- `cadastro_cliente.html` – cliente  
- `ordem_servico.html` – painel  
- `style.css`, `login.css`, `cliente.css`, `os.css` – estilos  
- `app.js`, `validalogin.js`, `cliente.js`, `os.js` – integrações com API  

---

## 📌 Considerações Finais
O sistema está funcional e atende aos requisitos principais.  
Permite a gestão básica de ordens de serviço e cadastro de clientes.

### Dificuldades encontradas
- Integração JS ↔ PHP  
- Tratamento de erros no backend  
- Ajustes visuais dentro do tempo disponível  

### Funcionalidades não entregues
- Autenticação avançada  
- Documentação completa em Swagger  
- Controle financeiro e dashboard  

### Trabalhos futuros
- Implementar autenticação JWT  
- Criar painel administrativo  
- Melhorar design e usabilidade  
- Adicionar controle financeiro  
- Gerar relatórios PDF  

---

## 🏁 Conclusão
O projeto integrador permitiu aplicar diversos conhecimentos práticos de desenvolvimento web, desde a modelagem do banco até a implementação completa do sistema.  
A entrega final demonstra evolução técnica, organização e capacidade de integração entre tecnologias.
