<?php
$file="stat.log";    // файл для записи истории посещения сайта
$col_zap=4999;    // ограничиваем количество строк log-файла 

function getRealIpAddr() {
  if (!empty($_SERVER['HTTP_CLIENT_IP']))        // Определяем IP
  { $ip=$_SERVER['HTTP_CLIENT_IP']; }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
  { $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
  else { $ip=$_SERVER['REMOTE_ADDR']; }
  return $ip;
}

$ip = getRealIpAddr();

$lines = file($file);

$log = array();
foreach ($lines as $v){   
    $string = explode("|",$v);
    $log[$string[0]] = $string[1];
}

$isFound = false;
foreach ($log as $k => $v) {
    if( $ip == $k) 
    {
        $log[$k]++;
        $isFound = true;
    }
}
if (!$isFound){
    $log[$ip] = 1;
}

$logr = array();
natsort($log); //сортировка по убыванию
$logr = array_reverse($log);

$arr = array();
foreach($logr as $k => $v)
    $arr[] = $k . "|" . (int)$v . "|\r\n";

file_put_contents($file, $arr);
?>
