<html>
<head><title>คำนวณเลขพื้นที่ </title></head>
<center>
<body>

<?php
$tips = 1/2;
$ความสูง = 10;
$ความยาวคู่ = 20 + 20 ;
$result = ($tips* $ความสูง * $ความยาวคู่);

echo"
<table border=\'1\' align=\'center\' width=\'500\'>
<table border=\'1\' align=\'center\'width=\'500\'>
<tr>
<td colspan=\'2\' align=\'center\'>
<big>คำนวณพื้นที่สี่เหลี่ยมคางหมู </big>
</td>
<tr>
<tr>
<td>ความสูง  </td>
<td align=\'right\'>  $ความสูง </td>
</tr>
<td>ความยาวคู่ </td>
<td align=\'right\'> $ความยาวคู่ </td>
</tr>
<tr>
<td> พื้นที่สี่เหลี่ยมคางหมู  </td>
<td align=\'right\'> $result </td>
<tr>
<tr>
<td colspan=\'2\' align=\'center\'>

<td><a href='Homepage.php'>กลับ</a></td>
</td>
</tr>
</table>";

?>