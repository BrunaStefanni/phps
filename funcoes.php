<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Function</h1>

    <?php
        function multiplica($a, $b, $c) { //função que multiplica 3 números
            $retorno = $a * $b * $c;
            return $retorno;
        }

        //Chamada da função
        echo multiplica(2,4,3);
        echo "<br>";
        echo multiplica(8,3,7);
    
    ?>

</body>
</html>