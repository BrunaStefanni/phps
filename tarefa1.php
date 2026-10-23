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
            echo "A area do quadrado e: " . $area . " m²";
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
            echo "<br>";
            echo "E a largura do mesmo é 4";
            echo "<br>";
            echo "A area do retangulo e: " . $area . " m²";
            echo "<br>";
            echo "O perimetro do retangulo e: " . $perimetro . " m";
        ?>

    <hr>

    <p>Construa um programa em PHP que peça um valor em metros e mostre o correspondente em decímetros, centímetros e milímetros.</p>
    <br>
    <!-- Conversão de comprimentos: 1 metro é 10 decímetros, 100 
     centímetros e 1000 milímetros, ou seja.. x10, x100 e x1000 -->

        <?php
            $metros = 12;
            $decimetros = $metros * 10; 
            $centimetros = $metros * 100; 
            $milimetros = $metros * 1000; 

            echo "Se eu tenho 12 metros...";
            echo "<br>";
            echo "<br>";
            echo $metros . " metros correspondem a:<br>"; 
            echo $decimetros . " decimetros<br>"; 
            echo $centimetros . " centimetros<br>"; 
            echo $milimetros . " milimetros";
        ?>
    
    <hr>
    
    <p>Construa um programa em PHP que peça um valor entre 1 e 9, e mostre a tabuada desse numero.</p>
    <br>
    <!-- É preciso criar um ciclo de repetição de cálculo x10, 
    começando em 1 e parando em 10, condições "for" and "if" -->

        <?php 
            $numero = 9;
            
            echo "Exemplo da tabuada de 9:";
            echo "<br>";
            echo "<br>";
            
            if ($numero >= 1 && $numero <= 9) { 
                    for ($i = 1; $i <= 10; $i++) { $resultado = $numero * $i;
                    echo $numero . " x " . $i . " = " . $resultado . "<br>"; 
                } 
                
                } else { 
                    echo "Por favor, escolha um numero entre 1 e 9."; 
                } 
            
        ?>
    <hr>
    
</body>
</html>
