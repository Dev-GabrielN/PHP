<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Doação de SANGUE</title>
</head>

<body>
<?php

$idade = 69;
$peso = 1200;

if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
    echo 'Atende aos requisitos.';
}else {
    echo 'Não atende aos requisitos.'; 

}

?>
</body>

</html>