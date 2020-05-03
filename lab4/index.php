<?php

// Вариант 4: в произвольном тексте все целые числа вывести синим цветом, все дроби вывести красным цветом и округлить до десятых, все слова, начинающиеся с большой буквы, вывести зелёным цветом. Текст вводить через форму. 

$string1 = $_POST["string1"];

if (isset($string1)) {

echo $string1;

echo "<br><br>";

$arr1 = explode(" ", $string1);



foreach ($arr1 as $t)
{
    if (preg_match('/^-?\d+$/',$t)){ 
        echo "<font color=blue> " . $t . "</font> "; }
    
    elseif (preg_match('/^-?\d+(\,\d+|\.\d+)?$/',$t)){ 
        echo "<font color=red> " . round($t, 1)  . "</font> "; }

    elseif (preg_match('/^[A-Z][A-Za-z]+$/',$t)){ 
        echo "<font color=green> " . $t . "</font> "; }

    else { 
        echo "<font color=black> " . $t . "</font> "; }

}

echo "<br><br>";


}
else
{ 
    echo "Wrong input!";   
}
 

include("form.html");  