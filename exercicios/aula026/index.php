<?php
    require_once 'Pessoa.php';

    $pessoas = [new Pessoa('Rebeca', 16, 'Feminino'), new Pessoa('Diego', 18, 'Masculino')];
    $livro = new Livro('As aventuras de Krystal', $pessoas[0], 300, $pessoas[1]);

    $livro -> abrir();
    $livro -> voltarPagina();
    $livro -> folhear(5);

    echo $livro -> detalhes();
?>