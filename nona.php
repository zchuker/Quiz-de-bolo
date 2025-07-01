<?php
$valor = $_POST['opcao7'];
session_start();
if ($valor == "Bolo vulcão de leite ninho com goiabada") {

    $_SESSION['correto'] += 1;
} else {

    $_SESSION['incorreto'] += 1;
}
$_SESSION['valor7'] = $valor;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/segundaPg.css">
    <title>9</title>
</head>

<body>
    <div id="container">

        <div class="imagem-pergunta">

            <img src="./img/Cenoura.png" alt="">
        </div>

        <form class="Quiz" action="decima.php" method="post">
            
            <div class="opcoes">
                <div class="opcao">
                 
                    <input  class="bolinha" type="radio" name="opcao8" value="Bolo de chocolate" required>
                    <label for="">Bolo de chocolate</label>
                </div>

                <div class="opcao">
                    
                    <input  class="bolinha" type="radio" name="opcao8" value="Bolo de cenoura" required>
                    <label for="">Bolo de cenoura </label>
                </div>

                <div class="opcao">
                  
                    <input  class="bolinha" type="radio" name="opcao8" value="Bolo de brigadeiro" required>
                    <label for="">Bolo de brigadeiro</label>
                </div>

                <div class="opcao">
                   
                    <input  class="bolinha" type="radio" name="opcao8" value="Bolo vulcão de chocolate" required>
                    <label for="">Bolo vulcão de chocolate</label>
                </div>

                
            </div>
            <input class="botão" type="submit" value="Proximo">
        </form>
    </div>
</body>

</html>