<?php

    class Conquista {
        private $id;
        private $titulo;
        private $descricao;
        private $jogo;
        private $jogador;
        private $progresso;
        private $recompensa;

        public function __construct($id, $titulo, $descricao, $jogo, $jogador, $progresso, $recompensa) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->jogo = $jogo;
            $this->jogador = $jogador;
            $this->progresso = $progresso;
            $this->recompensa = $recompensa;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getJogo() {
            return $this->jogo;
        }

        public function setJogo($jogo) {
            $this->jogo = $jogo;
        }

        public function getJogador() {
            return $this->jogador;
        }

        public function setJogador($jogador) {
            $this->jogador = $jogador;
        }

        public function getProgresso() {
            return $this->progresso;
        }

        public function setProgresso($progresso) {
            $this->progresso = $progresso;
        }

        public function getRecompensa() {
            return $this->recompensa;
        }

        public function setRecompensa($recompensa) {
            $this->recompensa = $recompensa;
        }

        public function exibirDetalhes() {

            echo "<h2>Detalhes da Conquista</h2>";

            echo "Jogo: " . $this->jogo->getNome() . "<br><br>";

            echo "Jogador: " . $this->jogador->getNome() . "<br><br>";

            echo "Conquista: " . $this->titulo . "<br><br>";

            echo "Progresso: " . $this->progresso->getPorcentagem() . "%<br><br>";

            if ($this->progresso->getDesbloqueada()) {

                echo "Status: Desbloqueada<br><br>";

                echo "Data de desbloqueio: "
                    . $this->progresso->getDataDesbloqueio() . "<br><br>";

            } else {

                echo "Status: Bloqueada<br><br>";

            }

            echo $this->recompensa->concederRecompensa() . "<br><br>";
        }
    }

?>