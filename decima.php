<?php
$valor = $_POST['opcao8'];
session_start();
if ($valor == "Bolo de cenoura") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor8'] = $valor;

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

            <img src="./img/Formigueiro.png" alt="">
        </div>
        <form class="Quiz4" action="decimaPirmeira.php" method="post">

            

            <div class="opcoes">

                <div class="opcao">


                    <input  class="bolinha" type="radio" name="opcao9" value="Bolo com gotas de chocolate" required>
                    <label for="">Bolo com gotas de chocolate</label>

                </div>


                <div class="opcao">

                  

                    <input  class="bolinha" type="radio" name="opcao9" value="Bolo com goiabada" required>
                    <label for="">Bolo com goiabada </label>

                </div>



                <div class="opcao">

                   
                    <input class="bolinha" type="radio" name="opcao9" value="Bolo formigueiro" required>
                    <label for="">Bolo formigueiro</label>


                </div>

                <div class="opcao">

                   
                    <input  class="bolinha" type="radio" name="opcao9" value="Bolo mesclado" required>
                    <label for="">Bolo mesclado</label>


                </div>


                
            </div>

            <input class="botão" type="submit" value="Proximo">

        </form>

    </div>

</body>

</html>