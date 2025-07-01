<?php
$valor = $_POST['opcao4'];
session_start();

if ($valor == "Bolo de fuba com goiabada") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor4'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>6</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/felpuda.png" alt="">
        </div>
        <form class="Quiz" action="setima.php" method="post">


            <div class="opcoes">

                <div class="opcao">
                
                    <input  class="bolinha" type="radio" name="opcao5" value="Bolo de coco" required>
                    <label for="">Bolo de coco</label>
                </div>

                <div class="opcao">
                   
                    <input  class="bolinha" type="radio" name="opcao5" value="Bolo de toalha felpuda" required>
                    <label for="">Bolo de toalha felpuda</label>
                </div>

                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao5" value="Bolo cremoso" required>
                    <label for="">Bolo cremoso</label>
                </div>

                <div class="opcao">
                  
                    <input  class="bolinha" type="radio" name="opcao5" value="Bolo de baunilha" required>
                    <label for="">Bolo de baunilha</label>
                </div>

                
            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>