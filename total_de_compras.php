<?php
$array= [10,25,2,5.50,80];
$valor= 0;

foreach($array as $number){
    $valor= $number + $valor;
}

echo "O valor da compra é: R$" . $valor . "<br>";
?>