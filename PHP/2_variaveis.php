<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Variaveis</title>
</head>

<body>

    <?php
    // A tipagem é dinamica, então o valor é interpretado pelo php e 
    // o proprio faz a tipagem, porém é possivel fazer especicações.

    $nome = (string)"arroz";
    $numero = (float)5.98;

    $numero_int = 15;
    $string = "Arroz com peixe";
    $numero_float = 15.23;
    $Boolean = true; // (true = 1) ou (false = vazio)

    $nome = "Gabriel";
    $Gabriel = "biel";
    echo $$nome;
    
    ?>

</body>

</html>