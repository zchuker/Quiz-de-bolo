<?php
$valor = $_POST['opcao6'];
session_start();
if ($valor == "Bolo de chocolate com nutella") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor6'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>8</title>
</head>

<body>
    <div id="container">
        <div class="imagem-pergunta">

            <img src="./img/bolo_caseiro_vulcao.png" alt="">
        </div>
        
        <form class="Quiz3" action="nona.php" method="post">

            <div class="opcoes">
                <div class="opcao2">

                    <input class="bolinha" type="radio" name="opcao7" value="Bolo de goiabada de coco" required>
                    <label for="">Bolo vulcão de goiabada de coco</label>
                </div>

                <div class="opcao2">

                    <input class="bolinha" type="radio" name="opcao7" value="Bolo de morango com coco" required>
                    <label for="">Bolo vulcão de morango com coco</label>
                </div>

                <div class="opcao2">

                    <input class="bolinha" type="radio" name="opcao7" value="Bolo vulcão de leite ninho com goiabada" required>
                    <label for="">Bolo vulcão de leite ninho com goiabada</label>
                </div>

                <div class="opcao2">

                    <input class="bolinha" type="radio" name="opcao7" value="Bolo vulcão de morango" required>
                    <label for="">Bolo vulcão de morango</label>
                </div>


            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
        

    </div>
</body>

</html>