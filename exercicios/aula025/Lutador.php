<?php
    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct(...$atributos) {
            $atributos = func_get_args();
            $this -> setNome($atributos[0]);
            $this -> setNacionalidade($atributos[1]);
            $this -> setIdade($atributos[2]);
            $this -> setAltura($atributos[3]);
            $this -> setPeso($atributos[4]);
            $this -> setVitorias($atributos[5]);
            $this -> setDerrotas($atributos[6]);
            $this -> setEmpates($atributos[7]);
        }

        public function getNome() {
            return $this -> nome;
        }

        public function setNome($nome) {
            $this -> nome = $nome;
        }

        public function getNacionalidade() {
            return $this -> nacionalidade;
        }

        public function setNacionalidade($nacionalidade) {
            $this -> nacionalidade = $nacionalidade;
        }

        public function getIdade() {
            return $this -> idade;
        }

        public function setIdade($idade) {
            $this -> idade = $idade;
        }

        public function getAltura() {
            return $this -> altura;
        }

        public function setAltura($altura) {
            $this -> altura = $altura;
        }

        public function getPeso() {
            return $this -> peso;
        }

        public function setPeso($peso) {
            $this -> peso = $peso;

            $this -> setCategoria();
        }

        public function getCategoria() {
            return $this -> categoria;
        }
        
        public function setCategoria() {
            if ($this -> getPeso() < 52.2 || $this -> getPeso() > 120.2) {
                $this -> categoria = 'Inválido';
            } elseif ($this -> getPeso() < 70.3) {
                $this -> categoria = 'Leve';
            } elseif ($this -> getPeso() < 83.9) {
                $this -> categoria = 'Médio';
            } else {
                $this -> categoria = 'Pesado';
            }
        }

        public function getVitorias() {
            return $this -> vitorias;
        }

        public function setVitorias($vitorias) {
            $this -> vitorias = $vitorias;
        }

        public function getDerrotas() {
            return $this -> derrotas;
        }

        public function setDerrotas($derrotas) {
            $this -> derrotas = $derrotas;
        }

        public function getEmpates() {
            return $this -> empates;
        }

        public function setEmpates($empates) {
            $this -> empates = $empates;
        }

        public function apresentar() {
            echo "<p>{$this -> getNome()}, {$this -> getNacionalidade()}, {$this -> getIdade()}, {$this -> getAltura()}, {$this -> getPeso()}, {$this -> getCategoria()}</p>";
        }

        public function status() {
            echo "<p><br>Vitórias: {$this -> getVitorias()}<br>Derrotas: {$this -> getDerrotas()}<br>Empates: {$this -> getEmpates()}</p>";
        }

        public function ganharLuta() {
            $this -> setVitorias($this -> getVitorias() + 1);
        }

        public function perderLuta() {
            $this -> setDerrotas($this -> getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this -> setEmpates($this -> getEmpates() + 1);
        }
    }
?>