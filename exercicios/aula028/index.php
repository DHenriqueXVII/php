<pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        require_once 'Professor.php';
    
        $aluno = new Aluno('Diego Henrique', 18, 'Masculino', true, 'Informática');
        $bolsista = new Bolsista('Ana Clara', 16, 'Feminino', true, 'Artes', 50);
        $tecnico = new Tecnico('Paulo André', 20, 'Masculino', true, 'Engenharia de pesca', 'Engenheiro de pesca');
        $professor = new Professor('José Roberto', 56, 'Masculino', 'Administração', 5500);
    
        print_r($aluno);
        $aluno -> pagarMensalidade();
        print_r($bolsista);
        $bolsista -> pagarMensalidade();
        print_r($tecnico);
        $tecnico -> pagarMensalidade();
        print_r($professor)
    ?>
</pre>