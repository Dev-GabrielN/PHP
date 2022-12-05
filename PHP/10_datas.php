<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style pattern/style.css">
    <title>Dates</title>
</head>

<body>
    <?php

    // Foi editado no PHP.ini o timezone do APACHE.

    // date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i');
    echo '<br/>';
    echo date_default_timezone_get();

     echo '<hr/>';
    ?>

</body>

</html>