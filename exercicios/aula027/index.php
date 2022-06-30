<pre>
    <?php
        require_once 'Pessoa.php';
    
        $pessoas = [
            new Pessoa('Diego', 18, 'Masculino'),
            new Aluno('Leila', 36, 'Feminino'),
            new Professor('Luzia', 70, 'Feminino'),
            new Funcionario('Adoniran', 20, 'Masculino')
        ];
    
        foreach ($pessoas as $key => $value) {
            print_r($pessoas[$key]);
        }
    ?>
</pre>