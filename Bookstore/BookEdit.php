<HTML>
<HEAD><TITLE>Show Data Book</TITLE></HEAD>
<BODY>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$id = $_GET['BookID']; // Assuming 'id' is passed via GET, please adjust as per your application logic

$sql = "SELECT * FROM book WHERE BookID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

$Path = "pictures/"; // Specify the path of the image files stored on the server
$image = "<img src='$Path{$data['Picture']}' valign='middle' align='center' width='80' height='100'>";

echo "<table border='1' align='center' bgcolor='#FFCCCC'>";
echo "<tr><td align='center' colspan='2' bgcolor='#FF99CC'><B>แสดงรายละเอียดหนังสือ</B></td></tr>";
echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["TypeID"]."</td></tr>";
echo "<tr><td> สถานะหนังสือ : </td><td>".$data["StatusID"]."</td></tr>";
echo "<tr><td> สานักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
echo "<tr><td> ราคาซื้อ : </td><td>".$data["UnitPrice"]."</td></tr>";
echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>";
echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
echo "<tr><td> จำนวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
echo "<tr><td> วันที่จัดเก็บหนังสือ : </td><td>".$data["BookDate"]."</td></tr></table>";

$stmt->close();
$conn->close();
?>
<BR>
<div align="center"> <a href="Bookmenu.php">กลับหน้าหลัก</a></div><BR>
</BODY>
</HTML>