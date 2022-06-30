<pre>
    <?php
        require_once 'Conta.php';
    
        $jubileu = new Conta;
    
        $jubileu -> setDono('Jubileu');
        $jubileu -> abrirConta('poupança');
        $jubileu -> depositar(300);
        $jubileu -> sacar(50);
        $jubileu -> pagarMensalidade();
    
        print_r($jubileu);

        $creuza = new Conta;

        $creuza -> setDono('Creuza');
        $creuza -> abrirConta('corrente');
        $creuza -> depositar(500);
        $creuza -> sacar(100);
        $creuza -> pagarMensalidade();

        print_r($creuza)
    ?>
</pre>