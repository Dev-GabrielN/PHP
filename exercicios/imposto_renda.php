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
    function calcularImpostoRenda($salario)
    {
        if ($salario < 1903.98) {
            $aliquota = 'isento';
        } else if ($salario >= 1903.99 && $salario <= 2826.65) {
            $aliquota = ((7.5 / 100) * $salario);
        } else if ($salario >= 2826.66 && $salario <= 3751.05) {
            $aliquota = ((15 / 100) * $salario);
        } else if ($salario >= 3751.06 && $salario <= 4664.68) {
            $aliquota = ((22.5 / 100) * $salario);
        } else {
            $aliquota = ((27.5 / 100) * $salario);
        }
        $salario = number_format($salario, 2, ',', '.');
        $aliquota = number_format($aliquota, 2, ',', '.');
        echo 'Seu sálario é de: ' . $salario . '<br/>';
        return $aliquota;
    }

    echo 'E o imposto a pagar é de: R$ ' . calcularImpostoRenda(12500) . '<br/>';

    ?>

</body>

</html>