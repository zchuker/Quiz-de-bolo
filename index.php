<?php
session_start();
$_SESSION['correto'] = 0;
$_SESSION['incorreto'] = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <title>Principal</title>
</head>

<body>
    <div id="container">
        <div class="Quiz">
            <form action="segundaPag.php" method="post">

            <h1>Adivinhe o sabor do bolo</h1>

                <div class="grupo-nome">
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome que seu nome :" required><br>
                </div>

                <input require type="submit" value="Enviar" class="botão">

            </form>
        </div>
    </div>
</body>

</html>