<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Function</h1>
    <hr>

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
    <br>
    <hr>

    <?php //Função recursiva
        function factorial($numero) { //função que retorna o fatorial de um número
            if($numero < 0) return -1;
            if($numero <= 1) return 1;
            return $numero * factorial($numero - 1);
        }

        //Chamada da função
        echo factorial(3);
        echo "<br>";
        echo factorial(5);
        
    ?>



</body>
</html>