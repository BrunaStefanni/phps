// doc com extra para salvar em txt
<?php

class Pessoa {

    private string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function mostrarNome() {
        echo "Nome recebido: " . htmlspecialchars($this->nome);
    }
}

// Receber os dados do formulário
if (isset($_GET["nome"])) {

    $nome = $_GET["nome"];

    // Criar objeto
    $pessoa = new Pessoa($nome);

    // Mostrar resultado
    $pessoa->mostrarNome();

}

?>
