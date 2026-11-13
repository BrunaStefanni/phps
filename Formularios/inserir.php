<!-- doc com extra para salvar em txt: pessoas.txt -->

<?php

class Pessoa {

    private string $nome;
    private string $arquivo = "pessoas.txt";

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function guardarPessoa() {

        $resultado = file_put_contents(
            $this->arquivo,
            $this->nome . PHP_EOL,
            FILE_APPEND | LOCK_EX
        );

        if ($resultado !== false) {
            echo "Pessoa guardada com sucesso!";
        } else {
            echo "Erro ao guardar pessoa!";
        }
    }
}

// Receber dados do formulário
if (isset($_GET["nome"])) {

    $nome = trim($_GET["nome"]);

    if ($nome !== "") {

        $pessoa = new Pessoa($nome);

        $pessoa->guardarPessoa();

    } else {
        echo "Por favor, introduza um nome.";
    }
}

?>
