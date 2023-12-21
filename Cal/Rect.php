<html>
<head><title>คำนวณเลขพื้นที่ </title></head>
<center>
<body>


<?php
$ความกว้าง = 5;
$ความยาว = 10;
$result = ($ความกว้าง * $ความยาว);

echo"
<table border=\'1\' align=\'center\' width=\'500\'>
<table border=\'1\' align=\'center\'width=\'500\'>
<tr>
<td colspan=\'2\' align=\'center\'>
<big>คำนวณพื้นที่วงกลม </big>
</td>
<tr>
<tr>
<td> กว้าง </td>
<td align=\'right\'> $ความกว้าง  </td>
</tr>
<td> ยาว </td>
<td align=\'right\'>  $ความยาว</td>
</tr>
<tr>
<td> พื้นที่สี่เหลี่ยม  </td>
<td align=\'right\'> $result </td>
<tr>
<tr>
<td colspan=\'2\' align=\'center\'>

<td><a href='Homepage.php'>กลับ</a></td>
</td>
</tr>
</table>";


?>
</body>
</center>
</html>