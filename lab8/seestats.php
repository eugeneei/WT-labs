<?php
$file=file("stat.log"); ?>

<html>
<head>
<style type='text/css'>
 td.zz {PADDING-LEFT: 3px; FONT-SIZE: 9pt; PADDING-TOP: 2px; FONT-FAMILY: Arial; }
</style>
</head>

<body>
<center>

<table width="680" cellspacing="1" cellpadding="1" border="0"
    STYLE="table-layout:fixed">
<tr bgcolor="#eeeeee">
 <td class="zz" width="100"><b>IP/прокси</b></td>
 <td class="zz" width="100"><b>Количество посещений</b></td>
</tr>

<?php
   foreach ($file as $v) {
   $string=explode("|", $v);
echo '<tr bgcolor="#eeeeee"><td class="zz">'.$string[0].'</td>';
echo '<td class="zz">'.$string[1].'</td></tr>';
}
echo '</table>';
?>