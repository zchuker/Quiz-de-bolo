<?php
$valor = $_POST['opcao'];
session_start();

if ($valor == "Bolo de fuba") {
    $_SESSION['correto'] += 1;
} else {
    $_SESSION['incorreto'] += 1;
}

$_SESSION['valor'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>3</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/Maracuja.png" alt="">
        </div>

        <form class="Quiz" action="quarta.php" method="post">

            <div class="opcoes">
                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao2" value="Bolo de maracuja" required>
                    <label for="">Bolo de maracuja</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao2" value="Bolo de limão" required>
                    <label for="">Bolo de limão</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao2" value="bolo de cenora" required>
                    <label for="">Bolo de cenora</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha"  type="radio" name="opcao2" value="bolo de chocolate" required>
                    <label for="">Bolo de chocolate</label>
                </div>


            </div>
            <input class="botão botão2" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>