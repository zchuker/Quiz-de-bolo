<?php

$valor = $_POST['nome'];

session_start();

$_SESSION['nome'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>2</title>
</head>

<body>


    <div id="container">



        <div class="imagem-pergunta">
           
            <img src="./img/bolo.png" alt="">
        </div>

        <form class="Quiz" action="terceira.php" method="post">



            <div class="opcoes">
                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao" value="Bolo de fuba" required>
                    <label for="">Bolo de fuba</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao" value="Bolo de laranja" required>
                    <label for="">Bolo de laranja</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao" value="Bolo de milho" required>
                    <label for=""> Bolo de milho</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao" value="Bolo de mandioca" required>
                    <label for=""> Bolo de mandioca </label>
                </div>


            </div>

            <input class="botão " type="submit" value="Proximo">

        </form>

    </div>

</body>

</html>