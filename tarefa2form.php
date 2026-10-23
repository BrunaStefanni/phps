<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Peso x Altura com Form</title>
</head>
<body>

    <form method="GET" action="">
		<label for="altura">Altura:</label>
		<input type="number" step="0.01" name="altura" id="altura" required><br><br>
		<label for="sexo">Sexo</label>
			<select name="sexo" id="sexo">
				<option value="m">masculino</option>
				<option value="f">feminino</option>
			</select>

		<button type="submit" name="calculo">Calcular</button> <!-- Dando nome ao botao para chamá-lo depois -->

	</form>
    
    <?php

        if (isset($_GET['calculo'])) {

	        $altura = $_GET['altura'];
	        $sexo = $_GET['sexo'];

	        if ($sexo == "m") {
		        $peso = (72.7 * $altura ) - 58;
		    } else {
		        $peso = (62.1 * $altura ) - 44.7;
	        }
            
            echo "O peso ideal é " . number_format($peso, 2, ',', '.') . " kg.";

        }
    ?>

</body>
</html>