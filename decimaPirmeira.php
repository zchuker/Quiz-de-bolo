<?php
$valor = $_POST['opcao9'];
session_start();
if ($valor == "Bolo formigueiro") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor9'] = $valor;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>10</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/Caseiro-de-Cenoura-com-Nutella.png" alt="">
        </div>
        <form class="Quiz4" action="final.php" method="post">

            

            <div class="opcoes">

                <div class="opcao">


                    <input  class="bolinha" type="radio" name="opcao10" value="Bolo  de chocolate" required>
                    <label for="">Bolo de chocolate</label>

                </div>


                <div class="opcao">

                  

                    <input  class="bolinha" type="radio" name="opcao10" value="Bolo de cenoura com nutella" required>
                    <label for="">Bolo de cenoura com nutella</label>

                </div>



                <div class="opcao">

                   
                    <input class="bolinha" type="radio" name="opcao10" value="Bolo de nutella" required>
                    <label for="">Bolo de nutella</label>


                </div>

                <div class="opcao">

                   
                    <input  class="bolinha" type="radio" name="opcao10" value="Bolo de cenoura com chocolate">
                    <label for="">Bolo de cenoura com chocolate</label>


                </div>


                
            </div>

            <input class="botão" type="submit" value="Proximo">

        </form>

    </div>

</body>

</html>