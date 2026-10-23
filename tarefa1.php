<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 1</title>

</head>
<body>
    <h1>Construindo Programas de Cálculos</h1>

    <hr>

    <p>Construa um programa em PHP para determinar a Área e o Perímetro de um quadrado.</p>
    <br>
    <!-- área= lado*lado
    perímetro= soma de todos os lados, 4*lado -->
        <?php 
            $lado = 5; 
            $area = $lado * $lado; 
            $perimetro = 4 * $lado; 

            echo "Se um lado = 5";
            echo "<br>";
            echo "<br>";
            echo "A area do quadrado e: " . $area . " m²<br>";
            echo "<br>";
            echo "<br>";
            echo "O perimetro do quadrado e: " . $perimetro . " m"; 
        ?>
    
    <hr>

    <p>Construa um programa em PHP para determinar a Área e o Perímetro de um retângulo.</p>
    <br>
    <!-- área= comprimento*largura
    perímetro= 2*(comprimento + largura) -->
    
        <?php
            $comprimento = 8;
            $largura = 4;
            $area = $comprimento * $largura;
            $perimetro = 2 * ($comprimento + $largura);

            echo "Se o comprimento de um retangulo é 8";
            echo "<br>";
            echo "E a largura do mesmo é 4";
            echo "<br>";
            echo "<br>";
            echo "A area do retangulo e: " . $area . " m²<br>";
            echo "<br>";
            echo "<br>";
            echo "O perimetro do retangulo e: " . $perimetro . " m";
        ?>

    <hr>

    <p>Construa um programa em PHP que peça um valor em metros e mostre o correspondente em decímetros, centímetros e milímetros.</p>

            
            
</body>
</html>
