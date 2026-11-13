<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Sobre Criptografia</title>
</head>
<body>

    <?php 
        // Valor guardado na base de dados
        $hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
 
        // password digitada pelo utilizador
        $password = 'rasmuslerdorf';
 
        if (password_verify($password, $hash)) {
            echo 'password correta';
        } else {
            echo 'password incorreta';
        }
    ?>
tem menu de contexto
    



</body>
</html>
