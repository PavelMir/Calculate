<?php
$logarifm=log10(100); //логарифм равен 2, поэтому сокращаем его и 2 перед числом пи

$firstNumber=pow(4,10);
$secondNumber=pow(19,4);
$root=sqrt($firstNumber-$secondNumber).'<br>';//получаем корень

$piSquared=pi()*pi(); //пи в квадрате
$result=$root*$piSquared;
echo "result : $result";


?>



