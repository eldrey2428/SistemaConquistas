<?php

    class RecompensaXP implements Recompensa {
        private $quantidadeXP;

        public function __construct($quantidadeXP) {
            $this->quantidadeXP = $quantidadeXP;
        }

        public function getQuantidadeXP() {
            return $this->quantidadeXP;
        }

        public function setQuantidadeXP($quantidadeXP) {
            $this->quantidadeXP = $quantidadeXP;
        }

        public function concederRecompensa() {
            return "Recompensa concedida: " . $this->quantidadeXP . " XP";
        }
    }

?>