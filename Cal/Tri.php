<html>
<head><title>คำนวณเลขพื้นที่ </title></head>
<center>
<body>

<?php
$tips = 1/2;
$ความสูง = 5;
$ความยาวฐาน = 10;
$result = ($tips* $ความสูง * $ความยาวฐาน);

echo"
<table border=\'1\' align=\'center\' width=\'500\'>
<table border=\'1\' align=\'center\'width=\'500\'>
<tr>
<td colspan=\'2\' align=\'center\'>
<big>คำนวณพื้นที่สามเหลี่ยม </big>
</td>
<tr>
<tr>
<td>ความสูง  </td>
<td align=\'right\'> $ความสูง </td>
</tr>
<td>ความยาวฐาน </td>
<td align=\'right\'>  $ความยาวฐาน</td>
</tr>
<tr>
<td> พื้นที่สามเหลี่ยม  </td>
<td align=\'right\'> $result </td>
<tr>
<tr>
<td colspan=\'2\' align=\'center\'>

<td><a href='Homepage.php'>กลับ</a></td>
</td>
</tr>
</table>";

?>