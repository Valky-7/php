<!DOCTYPE html>
<html>

<head>
    <title>
        Primeiro contato com PHP
    </title>


</head>

<body>
    <h1>----INICIO----</h1>
<?php
    echo "olá, mundo !<br>";
    echo 'bem-vindo'
?>

    <h1>----FIM----</h1>


<?php

    $numero = 10;

    if ($numero % 2 == 0) {
        echo "O número $numero é PAR.<br>";
    } else {
        echo "O número $numero é ÍMPAR.<br>";
    }


?>

<?php

    $nota = 6.5;
    if ($nota >= 7.0) {
        echo "Status: Aprovado.";
    } elseif ($nota >= 5.0) {
        echo "Status: Recuperação.";
    } else {
        echo "Status: Reprovado.";
    }

?>

<?php

    // Laços de repetição
    echo "<h3> Laço for </h3>";
    for ($i = 1; $i <= 3; $i++) {
        echo "Volta número $i <br>";
    };

    echo "<h3> Laço foreach </h3>";
    $linguagens = ["PHP", "JavaScript", "Python", "Portugol", "TypeScript", "C#"];
    foreach ($linguagens as $item) {
        echo "Linguagem: $item <br>";      
    }

    // Declaração da função com parâmetros
    function calcularDesconto($valorTotal, $porcentagem) {
        $desconto = $valorTotal * ($porcentagem /100);
        return $valorTotal - $desconto;
    }
    // Chamada e atribuição do retorno da função
    echo "<br><br>Calcular 10% de desconto de 250 <br>";
    $valorFinal = calcularDesconto(250.00, 10);
    echo "<b>Valor com desconto: R$ $valorFinal </b>"; // 225

?>
</body>

</html>