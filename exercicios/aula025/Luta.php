<?php
    require_once 'Lutador.php';
    
    class Luta {
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        public function getDesafiado() {
            return $this -> desafiado;
        }

        public function setDesafiado($desafiado) {
            $this -> desafiado = $desafiado;
        }

        public function getDesafiante() {
            return $this -> desafiante;
        }

        public function setDesafiante($desafiante) {
            $this -> desafiante = $desafiante;
        }

        public function getRounds() {
            return $this -> rounds;
        }

        public function setRounds($rounds) {
            $this -> rounds = $rounds;
        }

        public function getAprovada() {
            return $this -> aprovada;
        }

        public function setAprovada($aprovada) {
            $this -> aprovada = $aprovada;
        }

        public function marcarLuta($desafiado, $desafiante) {
            if (($desafiado -> getCategoria() == $desafiante -> getCategoria()) && ($desafiado != $desafiante)) {
                $this -> setAprovada(true);
                $this -> setDesafiado($desafiado);
                $this -> setDesafiante($desafiante);
            } else {
                $this -> setAprovada(false);
                $this -> setDesafiado(null);
                $this -> setDesafiante(null);
            }
        }

        public function lutar() {
            if ($this -> getAprovada()) {
                $this -> getDesafiado() -> apresentar();
                $this -> getDesafiado() -> status();
                $this -> getDesafiante() -> apresentar();
                $this -> getDesafiante() -> status();
                $vencedor = rand(0, 2);

                switch ($vencedor) {
                    case 0:
                        echo '<p>Luta empatada</p>';
                        $this -> getDesafiado() -> empatarLuta();
                        $this -> getDesafiante() -> empatarLuta();
                        break;
                    case 1:
                        echo "<p>Vitória de {$this -> getDesafiado() -> getNome()}</p>";
                        $this -> getDesafiado() -> ganharLuta();
                        $this -> getDesafiante() -> perderLuta();
                        break;
                    case 2:
                        echo "<p>Vitória de {$this -> getDesafiante() -> getNome()}</p>";
                        $this -> getDesafiante() -> ganharLuta();
                        $this -> getDesafiado() -> perderLuta();
                }
            } else {
                echo "<p>A luta não pode acontecer</p>";
            }
        }
    }
?>