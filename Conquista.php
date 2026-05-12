<?php

    class Conquista {
        private $id;
        private $titulo;
        private $descricao;
        private $jogo;
        private $jogador;
        private $progresso;

        public function __construct($id, $titulo, $descricao, $jogo, $jogador, $progresso) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->jogo = $jogo;
            $this->jogador = $jogador;
            $this->progresso = $progresso;
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

        public function listarConquista() {

            echo "<h2>Detalhes da Conquista</h2>";

            echo "Jogo: " . $this->jogo->getNome() . "<br><br>";

            echo "Jogador: " . $this->jogador->getNome() . "<br><br>";

            echo "Conquista: " . $this->titulo . "<br><br>";

            echo "Progresso: " . $this->progresso->getPorcentagem() . "%<br><br>";

            if ($this->progresso->getDesbloqueada()) {

                echo "Status: Desbloqueada<br><br>";

                echo "Data de desbloqueio: "
                    . $this->progresso->getDataDesbloqueio();

            } else {

                echo "Status: Bloqueada";
            }
        }
    }

?>