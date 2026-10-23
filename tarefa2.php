<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 1.1</title>

</head>
<body>
    <h1>Construindo Programas de Cálculos</h1>

    <hr>

    <p>Construa um programa em PHP para determinar se um número é par ou impa.</p>
    <br>
    <!-- Par: divide por 2 sem deixar resto.
    ímpar: quando, ao ser dividido por 2, deixa resto. -->
        <?php 
            echo "Exemplo para o número = 5";
            echo "<br>";
            echo "<br>";
            $numero = 5; 
                if ($numero % 2 == 0) { 
                echo "O numero e par"; 
                } else { 
                echo "O numero e impar"; 
            }
        ?>
    
    <hr>

    <p>Construa um programa em PHP que leia dois números inteiros e
    mostre o resultado da diferença do maior valor pelo menor.</p>
    <br>
    <!-- -->
    
        <?php
            echo "Lemos os números 1232 e 1323";
            echo "<br>";
            echo "<br>";
            $numero1 = 1232; 
            $numero2 = 1323; 
                if ($numero1 > $numero2) { 
                    $diferenca = $numero1 - $numero2; 
                    } else { $diferenca = $numero2 - $numero1; 
                }
            echo "A diferenca e: " . $diferenca;
        ?>

    <hr>

    <p>Construa um programa em PHP que calcule o peso ideal de uma pessoa.</p>
    <br> //Aplicar form posteriormente
    <!-- Dados de entrada: altura e sexo. 
        Fórmulas para cálculo do peso:
        i. peso ideal de homem = (72,7 x altura) - 58
        ii. peso ideal da mulher = (62,1 x altura) - 44,7 -->

        <?php
            echo "peso ideal de homem = (72,7 x altura) - 58";
            echo "<br>";
            echo "peso ideal da mulher = (62,1 x altura) - 44,7";
            echo "<br>";
            echo "Com base nisso.. usando um exemplo de um home com 1 metro e 75 cm..";
            echo"<br>";
            
            $altura = 1.75; 
            $sexo = "M"; 
                if ($sexo == "M") { 
                    $peso = (72.7 * $altura) - 58; 
                    } else { $peso = (62.1 * $altura) - 44.7; 
                } 
            echo "O peso calculado e: " . round($peso, 2) . " kg";
        ?>
    
    <hr>
    
    <p>Fazer um programa que recebe 3 valores e mostra o maior, o menor e a média</p>
    <br> // Inserir o doc para form e receber valores..
    <!-- A média é simples, soma-se os três valores e divide por 3. -->

        <?php 
            $numero1 = 4; 
            $numero2 = 8; 
            $numero3 = 6; 
            $maior = $numero1; 
            $menor = $numero1; 
                if ($numero2 > $maior) { 
                    $maior = $numero2; 
                } 
                if ($numero3 > $maior) { 
                    $maior = $numero3; 
                } 
                if ($numero2 < $menor) { 
                    $menor = $numero2; 
                } 
                if ($numero3 < $menor) { 
                    $menor = $numero3; 
                } 
                $media = ($numero1 + $numero2 + $numero3) / 3; 
            echo "O maior numero e: " . $maior . "<br>"; 
            echo "O menor numero e: " . $menor . "<br>"; 
            echo "A media e: " . round($media, 2);
        ?>
    <hr>
    
</body>
</html>
