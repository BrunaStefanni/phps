<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 3 - While</title>

</head>
<body>
    <h1>While's</h1>

    <hr>

    <p>Construa um programa em PHP que calcule o fatorial de um número(5!=5X4X3X2X1  5!=125)</p>
    <br>
    <!-- Regra matemática para fatorial: O fatorial de um número é a multiplicação desse número 
     por todos os inteiros positivos anteriores até chegar a 1. -->
        <?php
            $num = 5;
            $i = 1; //cria o contador que começa em 1
            $fatorial = 1;

            while ($i <= $num) {
                $fatorial = $fatorial * $i;
                $i++; //aumenta o contador em 1
            }

            echo "O fatorial de $num é $fatorial";
        ?>
    
    <hr>

    <p>Construa um programa em PHP que mostre todos os números ímpares de 1 até 100.</p>
    <br>
    <!-- Para esta atividade, comecei no número 1 e aumentei de 2 em 2.-->
        <?php
            $i = 1;

            while ($i <= 100) { //repete enquanto o número for menor ou igual a 100
                echo $i . "<br>";
                $i = $i + 2; //adiciona 2 ao número para chegar no próximo ímpar
            }
        ?>
    
    <hr>



    
</body>

</html>

