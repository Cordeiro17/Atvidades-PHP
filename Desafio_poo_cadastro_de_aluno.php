<?php

class Aluno {
    private $nome;
    private $idade;
    private $matricula;
    private $nota1;
    private $nota2;
    private $peso1;
    private $peso2;

    public function __construct($nome, $idade, $matricula, $nota1, $nota2, $peso1, $peso2) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->peso1 = $peso1;
        $this->peso2 = $peso2;
    }

    public function calcularMedia() {
        $numerador = ($this->nota1 * $this->peso1) + ($this->nota2 * $this->peso2);
        $denominador = $this->peso1 + $this->peso2;
        return $numerador / $denominador;
    }

    public function exibirDados() {
        echo "Nome: {$this->nome}\n";
        echo "Idade: {$this->idade}\n";
        echo "Matrícula: {$this->matricula}\n";
        echo "Nota 1: {$this->nota1} (Peso {$this->peso1})\n";
        echo "Nota 2: {$this->nota2} (Peso {$this->peso2})\n";
        echo "Média Ponderada: " . $this->calcularMedia() . "\n";
        echo "Status: " . $this->verificarAprovacao() . "\n";
    }

    public function verificarAprovacao() {
        $media = $this->calcularMedia();
        return $media >= 7 ? "Aprovado" : "Reprovado";
    }
}

// Exemplo de uso:
$aluno1 = new Aluno("João",  17, "A1234", 8.5, 6.0, 2, 3);
$aluno1->exibirDados();

?>
