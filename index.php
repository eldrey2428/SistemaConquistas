<?php
    require "Jogo.php";
    require "Jogador.php";
    require "Progresso.php";
    require "Recompensa.php";
    require "RecompensaXP.php";
    require "RecompensaItem.php";
    require "Conquista.php";
    require "ConquistaRara.php";
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

            <label>Nível de Raridade da Conquista:</label><br>
            <input type="text" name="nivelRaridade" placeholder="Ex: Lendária, Rara, Comum" required>
            <br><br>

            <label>Tipo de Recompensa:</label><br>
            <select name="tipoRecompensa">
                <option value="xp">XP</option>
                <option value="item">Item</option>
            </select>
            <br><br>

            <label>Quantidade de XP (se a recompensa for XP):</label><br>
            <input type="number" name="quantidadeXP" min="0" value="0">
            <br><br>

            <label>Nome do Item (se a recompensa for Item):</label><br>
            <input type="text" name="nomeItem">
            <br><br>

            <button type="submit">Cadastrar</button>

        </form>

        <hr>

        <?php
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Criando objeto jogo
                $jogo = new Jogo(1, $_POST['nomeJogo']);

                // Criando objeto jogador
                $jogador = new Jogador(1, $_POST['nomeJogador']);

                // Criando objeto progresso
                $progresso = new Progresso($_POST['progresso'], false, null);

                // Se progresso for 100, desbloqueia automaticamente
                if ($_POST['progresso'] >= 100) {
                    $progresso->marcarComoCompleto();
                }

                // Criando objeto recompensa conforme o tipo escolhido
                if ($_POST['tipoRecompensa'] == "xp") {
                    $recompensa = new RecompensaXP($_POST['quantidadeXP']);
                } else {
                    $recompensa = new RecompensaItem($_POST['nomeItem']);
                }

                // Criando objeto conquista rara (subclasse de Conquista)
                $conquista = new ConquistaRara(
                    1,
                    $_POST['nomeConquista'],
                    "Conquista criada pelo formulário",
                    $jogo,
                    $jogador,
                    $progresso,
                    $recompensa,
                    $_POST['nivelRaridade']
                );

                // Adicionando conquista ao jogo
                $jogo->adicionarConquista($conquista);

                // Exibindo detalhes da conquista
                $conquista->exibirDetalhes();

                echo "Nível de Raridade: " . $conquista->getNivelRaridade() . "<br><br>";
            }

        ?>

    </body>

</html>