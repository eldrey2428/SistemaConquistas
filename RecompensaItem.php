<?php

    class RecompensaItem implements Recompensa {
        private $nomeItem;

        public function __construct($nomeItem) {
            $this->nomeItem = $nomeItem;
        }

        public function getNomeItem() {
            return $this->nomeItem;
        }

        public function setNomeItem($nomeItem) {
            $this->nomeItem = $nomeItem;
        }

        public function concederRecompensa() {
            return "Recompensa concedida: Item \"" . $this->nomeItem . "\"";
        }
    }

?>