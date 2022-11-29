<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Casting de TIPOS</title>
</head>

<body>
    <?php
    //gettype() => retorna o tipo da variável
    $valor = 10;
    $valor2 = (float) $valor; //float, double ou real
    $valor3 = (string) $valor; 

    echo $valor. ' ' . gettype($valor);
    echo '<br />';
    echo $valor2. ' ' .gettype($valor2);
    echo '<br />';
    echo $valor3. ' ' .gettype($valor3);
    
    //converter de string para int
    $valor4 = '22.12';
    $valor5 = intval($valor4);
    echo '<br />';
    echo $valor5. ' ' .gettype($valor5);
    ?>
</body>

</html>