# 🎮 Sistema de Conquistas de Jogos (PHP + POO)

Projeto simples desenvolvido em PHP utilizando **Programação Orientada a Objetos (POO)**.  
O sistema simula conquistas de jogos, controlando o progresso do jogador e o desbloqueio das conquistas.

---

# 📌 Funcionalidades

- Cadastro de jogo via formulário
- Cadastro de jogador via formulário
- Cadastro de conquista via formulário
- Controle de progresso (0% a 100%)
- Desbloqueio automático ao atingir 100%
- Registro de data e hora do desbloqueio
- Exibição dos dados em tela

---

# 🧠 Conceitos utilizados

- Classes e Objetos
- Encapsulamento
- Associação entre classes
- Métodos getters e setters
- Uso de `POST` em formulário HTML
- Lógica de progressão

---

# 🗂 Estrutura do projeto

```txt
📁 projeto-conquistas
│
├── index.php
├── Jogo.php
├── Jogador.php
├── Progresso.php
└── Conquista.php
```

---

# 🧩 Como funciona o sistema

O usuário preenche um formulário com:

- 🎮 Nome do jogo
- 👤 Nome do jogador
- 🏆 Nome da conquista
- 📈 Porcentagem do progresso

O sistema então:

1. Cria os objetos `Jogo`, `Jogador`, `Progresso` e `Conquista`
2. Verifica o progresso
3. Se atingir 100%, marca como desbloqueada
4. Registra a data e hora do desbloqueio
5. Exibe os dados na tela

---

# 🧾 Exemplo de formulário

```html
<form method="POST">

    <label>Nome do Jogo:</label><br>
    <input type="text" name="nomeJogo"><br><br>

    <label>Nome do Jogador:</label><br>
    <input type="text" name="nomeJogador"><br><br>

    <label>Nome da Conquista:</label><br>
    <input type="text" name="nomeConquista"><br><br>

    <label>Progresso (%):</label><br>
    <input type="number" name="progresso"><br><br>

    <button type="submit">Cadastrar</button>

</form>
```

---

# ⚙️ Lógica do Progresso

- Começa como `false` (não desbloqueada)
- Data começa como `null`
- Ao atingir 100%:
  - desbloqueada = true
  - dataDesbloqueio recebe data/hora atual

---

# 💻 Exemplo de saída

```txt
🎮 Jogo: GTA 7

👤 Jogador: Fulano

🏆 Conquista: Concluir Modo Campanha

📈 Progresso: 100%

✅ Status: Desbloqueada

🕒 Data de desbloqueio: 12/05/2026 14:30:00
```

---

# 🚀 Como executar

1. Coloque os arquivos em uma pasta local (htdocs ou similar)
2. Inicie um servidor PHP (XAMPP, Laragon ou php -S)
3. Acesse o `index.php` no navegador

Exemplo via terminal:

```bash
php -S localhost:8000
```

---

# 👨‍💻 Autor

Projeto desenvolvido para fins de estudo de **PHP + POO**, focado em prática de classes, objetos e formulários HTML.
