<?php

// Вариант 4: написать функцию, формирующую полный список файлов в указанном каталоге (включая подкаталоги) и считающую общий объём файлов. Имя каталога, в котором следует выполнять поиск, получать через веб-форму. Отобразить в табличном виде.

function ShowDir($files, $direct)
{
    for ($i = 2; $i < count($files); $i++) {
        $way = $direct . "/" . $files[$i];
        if (!is_dir($way)) {
            echo "<tr><td>" . $files[$i] . "</td><tr>";
            $size += filesize($way);
        }
    }

    for ($i = 2; $i < count($files); $i++) {
        $way = $direct . "/" . $files[$i];
        if (is_dir($way)) {
            $files2 = scandir ($way);
            echo "<tr><th>" . $files[$i] . "</th><tr>";
            $size += ShowDir($files2, $way);
        }
    }
    return $size;
}

$dir = $_POST["dir"];

if (isset($dir)) {

echo "<table>"; // <tr><td>запись2</td><td> th заголовок

echo "<tr><caption>" . $dir . "</caption><tr>";

$files1 = scandir($dir);

$size = ShowDir($files1, $dir);

echo "</table><br>";

echo "Размер всех файлов: <b>" .  $size . "<b><br><br><br>";
}
else
{ 
    echo "Wrong input!";   
}
 

include("form.html");  