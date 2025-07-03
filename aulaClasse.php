<?php
require "carros.php";

//objeto (instância da classe)

$carro = new Carros();

$carro->cor="preto";
$carro->marca ="FIAT";
$carro->modelo = "uno velho";

echo ("cor: <br>". $carro->cor . "<br>" .
     "marca: <br>" . $carro->marca . "<br>" .
     "modelo: <br>" . $carro->modelo . "<br>");

?>