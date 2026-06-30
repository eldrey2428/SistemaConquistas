<?php

    class ConquistaRara extends Conquista {
        private $nivelRaridade;

        public function __construct($id, $titulo, $descricao, $jogo, $jogador, $progresso, $recompensa, $nivelRaridade) {
            parent::__construct($id, $titulo, $descricao, $jogo, $jogador, $progresso, $recompensa);
            $this->nivelRaridade = $nivelRaridade;
        }

        public function getNivelRaridade() {
            return $this->nivelRaridade;
        }

        public function setNivelRaridade($nivelRaridade) {
            $this->nivelRaridade = $nivelRaridade;
        }
    }

?>