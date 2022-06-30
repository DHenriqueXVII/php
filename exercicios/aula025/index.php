<pre>
    <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        
        $lutadores = array(
            new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 3, 1),
            new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
            new Lutador('Snapshadow', 'Estados Unidos', 35, 1.65, 80.9, 12, 2, 1),
            new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
            new Lutador('Ufocobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
            new Lutador('Nerdaard', 'Estados Unidos', 30, 1.81, 105.7, 12, 2, 4),
        );

        $luta = new Luta;
        $luta -> marcarLuta($lutadores[0], $lutadores[1]);
        $luta -> lutar();
        $lutadores[0] -> status();
        $lutadores[1] -> status();

        /*foreach ($lutadores as $contador => $valor) {
            print_r($lutadores[$contador]);
        }*/
    ?>
</pre>