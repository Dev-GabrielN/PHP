<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Concatenação</title>
</head>

<body>
    <?php
    echo 'Olá Gabriel, vi aqui que sua cor preferida é VERDE. <br>';
    echo 'Você tem 19 ANOS e gosta de comer BATATA.<br><br> <hr>';

    // O texto acima está escrito em 'hard code', ou seja, ele está 
    // estático e imútavel. 

    $nome = "Gabriel";
    $cor_fav = "verde";
    $idade = 19;
    $comida_fav = "batata";

    // Com as variaveis definidas é possivel fazer o mesmo texto 
    // Com duas possiveis maneiras de concatenar.

    echo 'Olá ' . $nome . ', vi aqui que sua cor preferida é ' . $cor_fav . '. <br>';
    echo 'Você tem ' . $idade . ' ANOS e gosta de comer ' . $comida_fav . '. <br><br> <hr>';

    echo "Olá $nome, vi aqui que sua cor preferida é $cor_fav. <br>";
    echo "Você tem $idade ANOS e gosta de comer $comida_fav.<br><br> <hr>";
    ?>
</body>

</html>