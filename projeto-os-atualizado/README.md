# 📘 Projeto Integrador – Etapa 3

## 🚀 Visão Geral
Este projeto integra **frontend (HTML/JS)**, **backend (PHP)** e **banco de dados** para gerenciar usuários, clientes e ordens de serviço (OS).  
Na Etapa 3, foram implementadas funcionalidades complementares e melhorias, preparando o sistema para a entrega final.

---

## 📂 Estrutura do Projeto
```
projeto-os/
│
├── frontend/
│   ├── index.html        # Tela inicial (login e navegação)
│   ├── style.css
│   └── app.js
│
├── backend/
│   └── api/
│       ├── login.php
│       ├── cadastrar_usuario.php
│       ├── cadastrar_cliente.php
│       ├── criar_os.php
│       ├── listar_os.php
│       ├── atualizar_os.php
│       └── excluir_os.php
│
└── database/             # Scripts SQL e configuração do banco
```

---

## ⚙️ Como executar

### Opção 1 – Usando Apache (XAMPP)
1. Copie o projeto para `C:\xampp\htdocs\projeto-os`.
2. Inicie o Apache pelo painel do XAMPP.
3. Acesse no navegador:
   - Frontend: `http://localhost/projeto-os/frontend/index.html`
   - Backend: `http://localhost/projeto-os/backend/api/login.php`

### Opção 2 – Usando servidor embutido do PHP
1. Abra o terminal e vá até a pasta raiz:
   ```bash
   cd C:\xampp\htdocs\projeto-os
   ```
2. Inicie o servidor:
   ```bash
   C:\xampp\php\php.exe -S localhost:8000
   ```
3. Acesse:
   - Frontend: `http://localhost:8000/frontend/index.html`
   - Backend: `http://localhost:8000/backend/api/login.php`

---

## ✅ Funcionalidades Implementadas
- Login de usuários (frontend integrado ao backend).  
- Cadastro de novos usuários.  
- Cadastro de clientes.  
- Criação de ordens de serviço (OS).  
- Listagem, atualização e exclusão de OS.  

---

## ⚠️ Funcionalidades Pendentes / Melhorias
- Validação mais robusta de login (tratamento de erros).  
- Melhorias visuais nas telas (usabilidade e estética).  
- Testes completos de CRUD de OS.  
- Documentação detalhada da API.  

---

## 📌 Próximos Passos (Etapa 4)
- Revisão final do código e banco de dados.  
- Testes completos de integração frontend ↔ backend ↔ banco.  
- Ajustes de usabilidade e estética.  
- Preparação da entrega final com documentação completa.  

---

## 📝 Status da Etapa 3
- **Aprimoramento e Funcionalidade:** integração frontend-backend concluída.  
- **Coerência com Planejamento:** escopo inicial mantido (login, cadastro, OS).  
- **Qualidade Técnica:** APIs funcionando, base sólida para refinamento.  
- **Preparação para Conclusão:** itens pendentes identificados e planejados para Etapa 4.  
