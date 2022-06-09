
<?php
    include 'Produto.php';

    $tenis = new Produto;
    $valor1 = $tenis->valor(60);
    $valor2 = $tenis->valor(+60);
    echo "<h2>Valor: {$tenis->valor(150)}</h2>";
    echo "<h2>Valor: {$valor1}</h2>";
    echo "<h2>Valor: {$valor2}</h2>";