<?php

// Вариант 4: Создайте 2 массива с целыми числами через 2 поля формы, объедините два массива в один (не используя специальные функции PHP типа array_merge(arr1,arr2)!), Выведите все чётные числа из получившегося массива.

$string1 = $_POST["array1"];
$string2 = $_POST["array2"];

if (isset($string1) && isset($string2)) {
if(preg_match('/^-?\d+(\ \d+)*?$/',$string1) && preg_match('/^-?\d+(\ \d+)*?$/',$string2)){

$arr1 = explode(" ", $string1);
$arr2 = explode(" ", $string2);

$n = count($arr1);

foreach ($arr2 as $t)
{
    $arr1[$n] = $t;
    $n++;
}

foreach ($arr1 as $t)
{
    if ($t % 2 == 0)
    echo $t . " ";
}

}
else
{ 
    echo "Wrong input!";   
}
}     

include("form.html");  