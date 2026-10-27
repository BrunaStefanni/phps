<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h2> Atividade 3 - While em Tabuada </h2>
    <form method="post">
        Escolha um número entre 1 e 9:
        <input type="number" name="num" min="1" max="9" required>
        <button type="submit">Mostrar tabuada</button>
    </form>

<?php
if (isset($_POST["num"])) {
    $num = (int) $_POST["num"];

    if ($num >= 1 && $num <= 9) {
        $i = 1;

        while ($i <= 10) {
            $resultado = $num * $i;
            echo "$num x $i = $resultado <br>";
            $i++;
        }
    } else {
        echo "Por favor, escolha um número entre 1 e 9.";
    }
}
?>

</body>
</html>
