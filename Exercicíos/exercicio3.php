<!-- Programador: Luana Andrade Patricio -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa de PHP</title>
</head>
<body>
    <h1>Primeiro exemplo:</h1>
    <h2>Números Inteiros</h2>
<?php
        echo 8/12;
        echo " | Exemplo de divisão com números inteiros. <br>";
?>

    <h2>Função para (função is_int)</h2>
<?php
    if(is_int(9)) {
        echo "É um inteiro 1. <br>";
    }
    
    $n = 30;

    if(is_int(2.3)) {
        echo "É um inteiro 2. <br>";
    }

    if(is_int($n)) {
        echo "É um inteiro 3. <br>";
    }
?>
<hr>

    <h1>Segundo exemplo:</h1>
    <h2>Números de float</h2>

    <?php

    $abc = 1.25;
    echo $abc;
    echo "<br>";
    
    ?>
    
    <h2>Verificação (Números float)</h2>
    <?php

    $xyz = "exemplo"; //falso
    $cba = 1.25; //verdadeiro

    if(is_float($xyz)) {
        echo "É float 1! <br>";
    }

    if(is_float($cba)) {
        echo "É float 2! <br>";
    }
?>
<br><hr>

        <h1>Terceiro exemplo:</h1>
        <h2>Tipos de Strings</h2>
<?php

    $taylor = 11;
    echo "- Quantos grammys eu tenho? <br> - $taylor - Taylor falou.";
?>
    <h2>Verificação Strings</h2>

    <?php

$teste = "SESI";

if(is_string($teste)) {
    echo "$teste é uma string <br>";
}

?>

<br><hr>

        <h1>Quarto exemplo:</h1>
        <h2>Tipos de Array</h2>
<?php

    $ghj = array (5, 4, 3, 2);

    echo "<p>O primeiro valor da lista é: $ghj[0]</p>";

    ?>

</body>
</html>