<!DOCTYPE html>
<html>
<head>
    <title>Update Table Book</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับ MySQL: " . mysqli_connect_error());
}

// ตั้งค่า charset ในการเชื่อมต่อฐานข้อมูล
mysqli_set_charset($conn, 'utf8');

$sqltxt = "SELECT * FROM book ORDER BY BookID";
$result = mysqli_query($conn, $sqltxt);

echo "<CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
echo "<table width=\"400\" border=\"0\" bordercolor=\"D1D7DA\" align=\"center\" valign=\"top\">";
echo "<tr align=\"center\" bgcolor=\"#0099CC\">";
echo "<td width=\"30\">ลำดับ</td>";
echo "<td width=\"100\">รหัสหนังสือ</td>";
echo "<td width=\"200\">ชื่อหนังสือ</td>";
echo "<td width=\"80\">ลบ</td></tr>";

$a = 1;
while ($rs = mysqli_fetch_array($result)) {
    echo "<tr align=\"center\" bgcolor=\"#CCFFFF\">";
    echo "<td>$a</td>";
    echo "<td><a href=\"detailbook.php?id={$rs['BookID']}\">{$rs['BookID']}</a></td>";
    echo "<td>{$rs['BookName']}</td>";
    echo "<td><a href=\"deletebook.php?id={$rs['BookID']}\" onclick=\"return confirm('ยืนยันการลบข้อมูลหนังสือ {$rs['BookName']}')\">[ลบ]</a></td>";
    echo "</tr>";
    $a++;
}
?>
</table>
<br><br>
<div align="center"><a href="addbook.php">เพิ่มรายการหนังสือ</a></div>
<br><br><center><a href="Bookmenu.php">Back to menu</a></center>
<br>
<?php
mysqli_close($conn);
?>
</body>
</html>
