# Projeto OS Atualizado

Esta é a versão **corrigida e testada** do sistema de Ordens de Serviço.  
Inclui todos os códigos revisados, banco de dados funcionando e documentação visual organizada.

---

## 🔹 O que mudou em relação à pasta `projeto-os`
- Correção no arquivo `criar_os.php` (uso da coluna `data_os`).
- Banco de dados revisado e funcionando (DDL + DML testados).
- Testes realizados no Postman:
  - Cadastro de usuário
  - Login
  - Criação de ordem de serviço
- Prints organizados na pasta `wireframes` mostrando o fluxo completo.

---

## 🔹 Como executar
1. Copie a pasta `projeto-os-atualizado` para o diretório `htdocs` do XAMPP.
2. Importe o banco de dados usando os scripts DDL e DML no pgAdmin.
3. Inicie o servidor Apache e PostgreSQL pelo XAMPP.
4. Acesse via navegador ou Postman:
   - `http://localhost/projeto-os-atualizado/api/cadastrar_usuario.php`
   - `http://localhost/projeto-os-atualizado/api/login.php`
   - `http://localhost/projeto-os-atualizado/api/criar_os.php`

---

## 🔹 Requisitos
- PHP 8+
- PostgreSQL
- XAMPP ou servidor equivalente
- Postman para testes

---

## 🔹 Fluxo da aplicação
1. Usuário se cadastra (Postman → API → Banco).
2. Faz login e recebe seu `id_usuario`.
3. Cria uma ordem de serviço vinculada ao usuário.
4. Ordem é gravada no banco e validada via `SELECT`.

---

## 🔹 Estrutura da pasta
- `api/` → arquivos PHP da API  
- `config/` → conexão com o banco  
- `wireframes/` → prints e documentação visual da Etapa 2  
- `README.md` → explicação geral do projeto atualizado  

---

## 🔹 Autoria
Projeto desenvolvido por **Tiago Back**.  
