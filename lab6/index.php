<?php

/* Вариант 4: написать скрипт, позволяющий установить пользователю произвольную куки
(с произвольным именем и значением, на произвольный срок).
Вывести в табличном виде список всех установленных куки.
Добавить возможность удалить вновь созданную куки. */

$name = $_POST["name"];
$value = $_POST["value"];
$time = $_POST["time"];

if(isset($_POST['Set'])) {

    if (isset($name) && isset($value) && isset($time)) {

        setcookie($name, $value, time() + $time);

        echo "<table>";
        foreach ($_COOKIE as $key => $val)
        {
            echo "<tr><td>" . $key . " => " . $val . "</td></tr>";
        }
        echo "</table>";
    }
}    
elseif(isset($_POST['Delete'])) {

    setcookie($name, 0, time() - $time);
}

include("form.html");  