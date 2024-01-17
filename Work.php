<html>
<head><title>คำนวณเลขพื้นที่ </title></head>
<center>
<body>
<?php
$ความกว้าง = 5;
$ความยาว = 10;
$result = ($ความกว้าง * $ความยาว);

echo "<big>  คำนวณพื้นที่สี่เหลี่ยม </big>\n"; 
echo "<br/>";
echo "ความกว้าง = 5"; 
echo "<br/>";
echo "ความยาว = 10";
echo "<br/>";
echo "$ความกว้าง * $ความยาว = $result <br/>";
echo "<br/>";


echo "<table border=\"1\" align=\"center\" width=\"500\">\n";
echo "<table border=\"1\" align=\"center\" width=\"500\">\n";
echo "<tr>\n";
echo "<td colspan=\"2\" align=\"center\">\n";
echo "<big>คำนวณพื้นที่สี่เหลี่ยม </big>\n";
echo "</td>\n";
echo "<tr>\n";
echo "<tr>\n";
echo "<td>ความกว้าง  </td>\n";
echo "<td align=\"right\">  5 </td>\n";
echo "</tr>\n";
echo "<td>ความยาว </td>\n";
echo "<td align=\"right\">  10</td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td> พื้นที่สี่เหลี่ยม  </td>\n";
echo "<td align=\"right\">50 </td>\n";
echo "<tr>\n";
echo "<tr>\n";
echo "<td colspan=\"2\" align=\"center\">\n";
echo "<input type=\"reset\" value=\" กลับ \" />\n";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";



?>
</body>
</center>
</html>