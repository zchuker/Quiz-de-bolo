<?php
$valor = $_POST['opcao5'];
session_start();
if ($valor == "Bolo de toalha felpuda") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor5'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>7</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/chocolateNutela.png" alt="">
        </div>

        <form class="Quiz" action="oitava.php" method="post">

            <div class="opcoes">
                <div class="opcao">
                   
                    <input class="bolinha" type="radio" name="opcao6" value="Bolo de chocolate" required>
                    <label for="">Bolo de chocolate</label>
                </div>

                <div class="opcao2">
                  
                    <input  class="bolinha" type="radio" name="opcao6" value="Bolo de chocolate com nutella" required>
                    <label for="">Bolo de chocolate com nutella</label>
                </div>

                <div class="opcao">
                    
                    <input class="bolinha" type="radio" name="opcao6" value="Bolo de nutella" required>
                    <label for="">Bolo de nutella</label>
                </div>

                <div class="opcao">
                 
                    <input  class="bolinha" type="radio" name="opcao6" value="Bolo de doce de leite">
                    <label for="">Bolo de doce de leite</label>
                </div>

                
            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>