<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include e Require</title>
</head>
<body>

    // Função para somar dois números
    <?php
        function somar($x, $y) {
            return $x + $y;
        }
    ?>

    
    // Funções para subtrair, multiplicar e dividir dois números
    /* ?php
        include 'funcoes.php';
        echo "<br>";
        echo "A soma de 5 + 10 é: " . somar(5, 10);
        echo "<br>";
        echo "A subtração de 15 - 7 é: " . subtrair(15, 7);
        echo "<br>";
        echo "A multiplicação de 4 * 6 é: " . multiplicar(4, 6);
        echo "<br>";
        echo "A divisão de 20 / 4 é: " . dividir(20, 4);
    ? */
    
</body>
</html>