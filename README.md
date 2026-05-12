# 🎮 Sistema de Conquistas de Jogos

Um sistema simples de gerenciamento de conquistas desenvolvido em **PHP** utilizando os conceitos de **Programação Orientada a Objetos (POO)**.

O projeto simula o funcionamento de conquistas em jogos, permitindo controlar progresso, desbloqueios e exibição de informações do jogador.

---

# 📌 Funcionalidades

✅ Cadastro de jogos  
✅ Cadastro de jogadores  
✅ Cadastro de conquistas  
✅ Controle de progresso das conquistas  
✅ Desbloqueio automático ao atingir 100%  
✅ Registro de data e hora do desbloqueio  
✅ Exibição detalhada das conquistas  

---

# 🛠️ Tecnologias Utilizadas

- PHP
- Programação Orientada a Objetos (POO)

---

# 📂 Estrutura do Projeto

```txt
📁 Sistema-Conquistas
│
├── 📄 index.php
├── 📄 Jogo.php
├── 📄 Jogador.php
├── 📄 Progresso.php
└── 📄 Conquista.php
```

---

# 🧩 Classes do Sistema

## 🎯 Classe: Jogo

Representa um jogo dentro do sistema.

### Atributos:
- `id`
- `nome`

---

## 👤 Classe: Jogador

Representa um jogador.

### Atributos:
- `id`
- `nome`

---

## 📈 Classe: Progresso

Responsável por controlar o progresso da conquista.

### Atributos:
- `porcentagem`
- `desbloqueada`
- `dataDesbloqueio`

### Métodos:
- `atualizarProgresso()`
- `marcarComoCompleto()`

---

## 🏆 Classe: Conquista

Representa uma conquista do jogo.

### Atributos:
- `id`
- `titulo`
- `descricao`
- `jogo`
- `jogador`
- `progresso`

### Métodos:
- `adicionarConquista()`
- `listarConquista()`
- `atualizarProgresso()`
- `desbloquearConquista()`
- `exibirDetalhes()`

---

# ▶️ Como Executar o Projeto

## 1️⃣ Coloque todos os arquivos na mesma pasta

---

## 2️⃣ Execute o servidor PHP

No terminal, utilize:

```bash
php index.php
```

---

# 💻 Exemplo de Saída

```txt
Conquista adicionada com sucesso!

=== CONQUISTA ===
Título: Concluir Modo Campanha
Descrição: Finalize todas as missões principais
Jogo: GTA 7
Jogador: Fulano
Progresso: 50%
Status: Bloqueada

=== CONQUISTA ===
Título: Concluir Modo Campanha
Descrição: Finalize todas as missões principais
Jogo: GTA 7
Jogador: Fulano
Progresso: 100%
Status: Desbloqueada
Data: 12/05/2026 14:30:00
```

---

# 📚 Conceitos Aplicados

- Encapsulamento
- Classes e Objetos
- Métodos Getters e Setters
- Associação entre classes
- Organização modular do sistema

---

# 👨‍💻 Autor

Projeto desenvolvido para fins acadêmicos e prática de Programação Orientada a Objetos em PHP.
