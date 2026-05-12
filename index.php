<?php
require "Jogo.php";
require "Jogador.php";
require "Progresso.php";
require "Conquista.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sistema de Conquistas</title>
</head>

<body>

    <h1>Sistema de Conquistas</h1>

    <form method="POST">

        <label>Nome do Jogo:</label><br>
        <input type="text" name="nomeJogo" required>
        <br><br>

        <label>Nome do Jogador:</label><br>
        <input type="text" name="nomeJogador" required>
        <br><br>

        <label>Nome da Conquista:</label><br>
        <input type="text" name="nomeConquista" required>
        <br><br>

        <label>Porcentagem do Progresso:</label><br>
        <input type="number" name="progresso" min="0" max="100" required>
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Criando objeto jogo
        $jogo = new Jogo(
            1,
            $_POST['nomeJogo']
        );

        // Criando objeto jogador
        $jogador = new Jogador(
            1,
            $_POST['nomeJogador']
        );

        // Criando objeto progresso
        $progresso = new Progresso(
            $_POST['progresso'],
            false,
            null
        );

        // Se progresso for 100, desbloqueia automaticamente
        if ($_POST['progresso'] >= 100) {
            $progresso->marcarComoCompleto();
        }

        // Criando objeto conquista
        $conquista = new Conquista(
            1,
            $_POST['nomeConquista'],
            "Conquista criada pelo formulário",
            $jogo,
            $jogador,
            $progresso
        );

        // Exibir conquista
        $conquista->listarConquista();
    }

    ?>

</body>

</html>