## Passo 1 – Banco de Dados (Nota Máx: 4)
- [ ] Definir entidades principais do projeto
- [ ] Definir atributos de cada entidade
- [ ] Determinar chaves primárias e relacionamentos
- [ ] Criar scripts DDL (`CREATE TABLE`) com tipos de dados e restrições (`PRIMARY KEY`, `FOREIGN KEY`, `NOT NULL`, `UNIQUE`)
- [ ] Criar scripts DML (`INSERT`) para registros iniciais
- [ ] Configurar parâmetros de conexão ao banco de dados (host, porta, usuário, senha, nome do DB)
- [ ] Testar scripts garantindo que as tabelas e registros funcionem corretamente

## Passo 2 – Telas / Wireframes (Nota Máx: 4)
- [ ] Abrir Figma e criar um novo arquivo
- [ ] Criar frames para cada tela principal:
  - [ ] Tela de login
  - [ ] Tela de cadastro
  - [ ] Tela de listagem de dados
  - [ ] Tela de detalhes/edição
- [ ] Adicionar elementos essenciais:
  - [ ] Título da tela
  - [ ] Campos de entrada (usuário, senha, etc.)
  - [ ] Botões de ação (ex.: Entrar, Salvar)
  - [ ] Links opcionais (ex.: Esqueceu a senha?, Criar conta)
- [ ] Adicionar ícones e imagens, se necessário
- [ ] Organizar alinhamento e espaçamento entre elementos
- [ ] Criar protótipo básico (simulação de navegação entre telas)
- [ ] Exportar wireframes (PNG, JPG ou PDF) e salvar na pasta `wireframes/` do repositório
- [ ] Commitar e enviar ao repositório (`git add`, `commit`, `push`)
- [ ] Referenciar os wireframes no README ou plataforma de entrega

## Passo 3 – APIs / Backend (Nota Máx: 2)
- [ ] Escolher linguagem e framework para backend (Node.js, Python, PHP, Java, etc.)
- [ ] Conectar backend ao banco de dados
- [ ] Criar endpoints básicos:
  - [ ] `GET` – listar dados
  - [ ] `POST` – criar registro
  - [ ] `PUT` – atualizar registro
  - [ ] `DELETE` – remover registro
- [ ] Validar e tratar dados recebidos (payload)
- [ ] Garantir persistência ou consulta correta no banco de dados
- [ ] Retornar respostas claras para o usuário ou Postman
- [ ] Documentar endpoints com exemplos de requisição e resposta
- [ ] Criar collection do Postman para testes, se necessário
