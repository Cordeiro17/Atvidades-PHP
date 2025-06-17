<?php
    $alunos = [
        "Guilherme Cordeiro" => [
            "nota"=> "9.0",
        ],
        "Matheus Batista" => [
            "nota"=> "10.0",
        ],
        "Anna Luísa" => [
            "nota"=> "9.5",
        ],
    ];

    $media = 0;

    foreach ($alunos as $key => $value) {
        echo "Aluno: ". $key ." | Nota: ". $value['nota'] ."<br>";
        $media += $value['nota'] / 3;
    }

    echo "Média da turma: " . number_format(num: $media, decimals: 2, decimal_separator: ".", thousands_separator: ",");

?>