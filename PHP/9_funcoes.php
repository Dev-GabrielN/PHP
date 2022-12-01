<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Funções</title>
</head>

<body>
    <?php
    function helloWorld()
    {
        echo "Hello World";
        echo "<br/>";
    }

    function calcularArea($largura, $comprimento)
    {
        $area = ($largura * $comprimento);
        number_format($area, 2, '.','');
        return $area;
    }

    echo 'A area é de ' . calcularArea(15, 50) . '<br/>';
    echo 'A area é de ' . calcularArea(20, 500) . '<br/>';
    echo 'A area é de ' . calcularArea(10, 30) . '<br/>';

    ?>

</body>

</html>