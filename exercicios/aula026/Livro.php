<?php
    require_once 'Publicacao.php';
    
    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totalPaginas;
        private $paginaAtual;
        private $aberto;
        private $leitor;

        public function __construct(...$informacoes) {
            $this -> setTitulo($informacoes[0]);
            $this -> setAutor($informacoes[1]);
            $this -> setTotalPaginas($informacoes[2]);
            $this -> setPaginaAtual(1);
            $this -> setAberto(false);
            $this -> setLeitor($informacoes[3]);
        }

        public function getTitulo() {
            return $this -> titulo;
        }
        
        private function setTitulo($titulo) {
            $this -> titulo = $titulo;
        }

        public function getAutor() {
            return $this -> autor;
        }
        
        private function setAutor($autor) {
            $this -> autor = $autor -> getNome();
        }

        public function getTotalPaginas() {
            return $this -> totalPaginas;
        }
        
        private function setTotalPaginas($totalPaginas) {
            $this -> totalPaginas = $totalPaginas;
        }

        public function getPaginaAtual() {
            return $this -> getAberto() == 'O livro está aberto' ? "Você está na página {$this -> paginaAtual}" : 'Você ainda não abriu o livro';
        }
        
        private function setPaginaAtual($paginaAtual) {
            $this -> paginaAtual = $paginaAtual;
        }

        public function getAberto() {
            return $this -> aberto ? 'O livro está aberto' : 'O livro está fechado';
        }
        
        private function setAberto($aberto) {
            $this -> aberto = $aberto;
        }

        public function getLeitor() {
            return $this -> leitor;
        }
        
        private function setLeitor($leitor) {
            $this -> leitor = $leitor -> getNome();
        }

        public function detalhes() {
            return "<div>
                        <h1>{$this -> getTitulo()}</h1>

                        <strong>{$this -> getAutor()}</strong>

                        <p>{$this -> getTotalPaginas()} páginas</p>

                        <p>{$this -> getPaginaAtual()}</p>

                        <p>{$this -> getAberto()}</p>

                        <p><strong>{$this -> getLeitor()}</strong> Está lendo</p>
                    </div>";
        }

        public function abrir() {
            $this -> setAberto(true);
        }
        
        public function fechar() {
            $this -> setAberto(false);
        }

        public function folhear($pagina) {
            if ($pagina < $this -> getTotalPaginas()) {
                $this -> setPaginaAtual($pagina);
            } else {
                echo '<p>Impossível folhear</p>';
            }
        }

        public function avancarPagina() {
            if ($this -> getAberto() == 'O livro está aberto' && $this -> paginaAtual < $this -> getTotalPaginas()) {
                $this -> setPaginaAtual($this -> paginaAtual + 1);
            } elseif ($this -> getAberto() == 'O livro está fechado') {
                $this -> setAberto(true);
                $this -> setPaginaAtual(1);
            } else {
                echo '<p>Você já terminou de ler o livro</p>';
            }
        }

        public function voltarPagina() {
            if ($this -> getAberto() == 'O livro está aberto' && $this -> paginaAtual > 1) {
                $this -> setPaginaAtual($this -> paginaAtual - 1);
            } else {
                echo '<p>Impossível voltar página</p>';
            }
        }
    }
?>