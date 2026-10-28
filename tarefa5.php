<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa "4"</title>
</head>
<body>
    <h1>for</h1>

    <hr>
    <p>Vamos fazer um programa fatorial com "for" desta vez</p>
    <br>
    <!-- No for, colocamos três elementos na mesma linha e no while 
     escrevemos a inicialização antes do ciclo e a atualização dentro dele. -->
    
        <?php
            $numero = 5;
            $fatorial = 1;

            for ($i = 1; $i <= $numero; $i++) {
                $fatorial = $fatorial * $i;
            }

            echo "O fatorial de $numero é $fatorial";
        ?>
    
    <hr>

    <p>Construa um programa em PHP que utilize um ciclo for para imprimir os números de 50 
        até 0, mas diminuindo de 5 em 5 unidades a cada iteração (50, 45, 40, ..., 0)</p>
    <br>
    <!-- --> 

        <?php

            for ($i = 50; $i >= 0; $i = $i - 5) {
                echo $i . "<br>";
            }
        ?>
    
    <hr>

    <p>Construa um programa em PHP que percorra os números de 1 a 100 utilizando um for</p>
    <br>
    <!-- Resultado - A soma dos múltiplos de 3 entre 1 e 100 é: 1683 --> 

        <?php
            $soma = 0;

            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0) { //condição, se o resto for 0, num é multiplo de 3
                    $soma = $soma + $i;
                }
            }

            echo "A soma dos múltiplos de 3 entre 1 e 100 é: $soma";
        ?>
    
    <hr>

    <p>Construa um programa em PHP que utiliza um ciclo for para gerar 
        e exibir os primeiros 15 números da sequência de Fibonacci (onde cada 
        número é a soma dos dois anteriores: 0, 1, 1, 2, 3, 5, 8...).</p>
    <br>
    <!-- --> 

        <?php
            $a = 0;
            $b = 1;

            for ($i = 1; $i <= 15; $i++) {
                echo $a . " ";

                $proximo = $a + $b;
                $a = $b;
                $b = $proximo;
            }
        ?>
    
    <hr>

    
</body>
</html>