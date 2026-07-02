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

</body>

</html>