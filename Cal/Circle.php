<html>
<head><title>คำนวณเลขพื้นที่ </title></head>
<center>
<body>

<?php
$pie = 10;
$R = 15;
$result = ($pie* $R * $R);

echo"
<table border=\'1\' align=\'center\' width=\'500\'>
<table border=\'1\' align=\'center\'width=\'500\'>
<tr>
<td colspan=\'2\' align=\'center\'>
<big>คำนวณพื้นที่วงกลม </big>
</td>
<tr>
<tr>
<td> พาย  </td>
<td align=\'right\'>  $pie </td>
</tr>
<td> รัศมี </td>
<td align=\'right\'> $R 10</td>
</tr>
<tr>
<td> พื้นที่วงกลม  </td>
<td align=\'right\'> $result </td>
<tr>
<tr>
<td colspan=\'2\' align=\'center\'>

<td><a href='Homepage.php'>กลับ</a></td>
</td>
</tr>
</table>";

?>