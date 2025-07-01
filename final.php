<?php
$valor = $_POST['opcao10'];
session_start();
if ($valor == "Bolo de cenoura com nutella") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}

$resultado = $_SESSION['correto'] / 10;
$_SESSION['porcentagem'] = $resultado * 100;
$_SESSION['valor10'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../morango/css/final.css">
    <title>Final</title>
</head>

<body>




    <?php


    echo "<div class='ap'> ";

    if ($_SESSION['correto'] >= 9) {
        echo " <div class='imagem-pergunta'>
    <h1 class='animcão1'>Nivel vovó palmirinha</h1>';
    <img class='tamanhoImg2' src='./img/palmirinha.png' >
</div>";
    } else if ($_SESSION['correto'] >= 4) {
        echo " <div class='imagem-pergunta'>

        <h1 class='animcão2'>Nivel chef de cozinha</h1>

        <img class='tamanhoImg' src='./img/chef.png' >
    </div>";
    } else {
        echo " <div class='imagem-pergunta'>
        <h1 class='animcão'>Nivel mendingo(vc não sabe de bolo)</h1>';
        <img class='tamanhoImg' src='./img/mendingo.png' >
    </div>";
    }

    echo "<div class='central'> ";


    echo "<div class='elemento'>";
    echo "Nome do usuario : " . $_SESSION['nome'] . '<br>';
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor'] == "Bolo de fuba") {
        echo "Pg 1: " . $_SESSION['valor'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 1: " . $_SESSION['valor'] . " ❌ " . '<br>';
    }

    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor2'] == "Bolo de maracuja") {
        echo "Pg 2: " . $_SESSION['valor2'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 2: " . $_SESSION['valor2'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor3'] == "Bolo de limão") {
        echo "Pg 3: " . $_SESSION['valor3'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 3: " . $_SESSION['valor3'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor4'] == "Bolo de fuba com goiabada") {
        echo "Pg 4: " . $_SESSION['valor4'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 4: " . $_SESSION['valor4'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor5'] == "Bolo de toalha felpuda") {
        echo "Pg 5: " . $_SESSION['valor5'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 5: " . $_SESSION['valor5'] . " ❌ " . '<br>';
    }

    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor6'] == "Bolo de chocolate com nutella") {
        echo "Pg 6: " . $_SESSION['valor6'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 6: " . $_SESSION['valor6'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";

    if ($_SESSION['valor7'] == "Bolo vulcão de leite ninho com goiabada") {
        echo "Pg 7: " . $_SESSION['valor7'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 7: " . $_SESSION['valor7'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor8'] == "Bolo de cenoura") {
        echo "Pg 8: " . $_SESSION['valor8'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 8: " . $_SESSION['valor8'] . " ❌ " . '<br>';
    }
    echo "</div>";

    echo "<div class='elemento'>";
    if ($_SESSION['valor9'] == "Bolo formigueiro") {
        echo "Pg 9: " . $_SESSION['valor9'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 9: " . $_SESSION['valor9'] . " ❌ " . '<br>';
    }
    echo "</div>";
    echo "<div class='elemento'>";
    if ($_SESSION['valor10'] == "Bolo de cenoura com nutella") {
        echo "Pg 10: " . $_SESSION['valor10'] . "  ✔️" . '<br>';
    } else {
        echo "Pg 10: " . $_SESSION['valor10'] . " ❌ " . '<br>';
    }
    echo "</div>";
    echo "<div class='elemento'>";

    echo "correto: " . $_SESSION['correto'] . '<br>';
    echo "incorreto: " . $_SESSION['incorreto'] . '<br>';
    echo "porcentagem de acertos:  " . $_SESSION['porcentagem'] . "%" . '<br>';
    echo "</div>";




    echo " <form class='central2' action='index.php' method='post'> 
    <input class='botão' type='submit' value='Volta'>
    <?php 
    $_SESSION[correto] = 0;
    $_SESSION[incorreto] = 0;
    ?>
    </form>
";
    echo "</div>";
    echo "</div>";

    ?>
</body>

</html>