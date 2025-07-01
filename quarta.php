<?php
$valor = $_POST['opcao2'];
session_start();

if ($valor == "Bolo de maracuja") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}

$_SESSION['valor2'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>4</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/Limao.png" alt="">
        </div>

        <form class="Quiz" action="quinta.php" method="post">
            
            <div class="opcoes">
                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao3" value="Bolo de limão" required>
                    <label for="">Bolo de limão</label>
                </div>

                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao3" value="Bolo de leite condensado" required>
                    <label for="">Bolo de leite condensado</label>
                </div>

                <div class="opcao">
                   
                    <input  class="bolinha" type="radio" name="opcao3" value="Bolo de ninho" required>
                    <label for="">Bolo de ninho</label>
                </div>

                <div class="opcao">
                  
                    <input  class="bolinha" type="radio" name="opcao3" value="Bolo de baunilha" required>
                    <label for="">Bolo de baunilha</label>
                </div>


            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>