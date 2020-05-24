<?php
require("menu.html");

$page = $_GET["page"];

echo "<div class='content-white'>";
if ($page == "main") {

    echo "<a><font size='5'>". "Главная страница сайта" ."</font></a>";
}
else if ($page == "service") {

    echo "<a><font size='5'>". "Мы представляем услуги разработки сайтов" ."</font></a>";
}
else if ($page == "price") {

    echo "<a><font size='5'>". "Мы предоставляем свои услуги абсолютно бесплатно, конечно после того как вы занесете 100% предоплату" ."</font></a>";
}
else if ($page == "contact") {

    echo "<a><font size='5'>". "Мы сами с вами свяжемся, если посчитаем ваш текущий сайт слишком хорощим" ."</font></a>";
}
echo "</div>";
echo "</body>";
echo "</html>";