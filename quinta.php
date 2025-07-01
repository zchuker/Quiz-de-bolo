<?php
$valor = $_POST['opcao3'];

session_start();

if ($valor == "Bolo de limão") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}

$_SESSION['valor3'] = $valor;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>5</title>
</head>

<body>
    <div id="container">

    <div class="imagem-pergunta">

            <img src="./img/Fuba_Goiabada.png" alt="">
        </div>

        <form class="Quiz" action="sexta.php" method="post">
           
            <div class="opcoes">
                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao4" value="Bolo de fuba com goiabada" required>
                    <label for="">Bolo de fuba com goiabada</label>
                </div>

                <div class="opcao">

                    <input  class="bolinha" type="radio" name="opcao4" value="Bolo de fuba com morango" required>
                    <label for="">Bolo de fuba com morango</label>
                </div>

                <div class="opcao">
                   
                    <input  class="bolinha" type="radio" name="opcao4" value="Bolo de  goiabada" required>
                    <label for="">Bolo de goiabada</label>
                </div>

                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao4" value="Bolo de fuba" required>
                    <label for="">Bolo de fuba</label>
                </div>

                
            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>