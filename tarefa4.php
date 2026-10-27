<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa "3"</title>
</head>
<body>
    <h1>While + do</h1>

    <hr>

    <p>Exercício 1 - Lançamento de dado</p>
    <br>
    <!-- Utiliza um ciclo do...while para continuar a lançar o dado até que o resultado obtido 
     seja um 6. No final, exibe o número de tentativas que foram necessárias.. -->
        
        <?php

            $tentativas = 0;

            do {
                $dado = rand(1, 6);
                $tentativas++;

                echo "Lançamento: " . $dado . "<br>";

            } while ($dado != 6); //conndição

            echo "<br>O número de tentativas foi: " . $tentativas;

        ?>

    <hr>

    <p>Exercício 2 - Número secreto</p>
    <br>
    <!--Utiliza um ciclo do...while para fazer o programa gerar números aleatórios entre 1 e 100 até acertar no 
    número secreto. Exibe cada tentativa gerada e, no final, o número total de tentativas que 
    o programa demorou a acertar. -->
        
        <?php

            $tentativas = 0;
            $secreto = 36; //exemplo de número secreto

            do {
                $numero = rand(1, 100);
                $tentativas++;

                echo "Tentativa " . $tentativas . ":" . $numero . "<br>";

            } while ($numero != $secreto); //conndição

            echo "<br>O número secreto foi: " . $secreto;
            echo "<br>O número de tentativas foi: " . $tentativas;

        ?>
    
    <hr>

</body>
</html>