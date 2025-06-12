<?php
$nota1= 10;
$nota2= 7;
$nota3= 5;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média do aluno é: " . $media . "<br>";
if ($media >= 6) {
    echo "O aluno foi aprovado.";
} 
else {
    echo "O aluno foi reprovado.";
}
?>