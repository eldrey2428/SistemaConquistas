<?php
    class Progresso {
        private $porcentagem;
        private $desbloqueada;
        private $dataDesbloqueio;

        public function __construct($porcentagem = 0, $desbloqueada = false, $dataDesbloqueio = null) {
            $this->porcentagem = $porcentagem;
            $this->desbloqueada = $desbloqueada;
            $this->dataDesbloqueio = $dataDesbloqueio;
        }

        public function getPorcentagem() {
            return $this->porcentagem;
        }

        public function setPorcentagem($porcentagem) {
            $this->porcentagem = $porcentagem;
        }

        public function getDesbloqueada() {
            return $this->desbloqueada;
        }

        public function getDataDesbloqueio() {
            return $this->dataDesbloqueio;
        }

        public function atualizarProgresso($valor) {
            $this->porcentagem += $valor;

            if ($this->porcentagem >= 100) {
                $this->marcarComoCompleto();
            }
        }

        public function marcarComoCompleto() {
            $this->porcentagem = 100;
            $this->desbloqueada = true;
            $this->dataDesbloqueio = date("d/m/Y");
        }
    }
?>