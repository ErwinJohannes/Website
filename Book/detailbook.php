<HTML>
<HEAD><TITLE>Show Data Book</TITLE></HEAD>
<BODY>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับ MySQL ได้: " . mysqli_connect_error());
}

// ตรวจสอบว่ามีค่า "id" ที่ถูกส่งมาผ่าน URL หรือไม่
if (!isset($_GET['id'])) {
    die("ไม่สามารถแสดงข้อมูลได้: ไม่พบรหัสหนังสือ");
}

$id = $_GET['id'];
$sql = "SELECT * FROM book WHERE BookID = $id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("เกิดข้อผิดพลาดในการดึงข้อมูล: " . mysqli_error($conn));
}
$data = mysqli_fetch_array($result);
$Path = "pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
$image = "<img src='$Path{$data['Picture']}' valign='middle' align='center' width='80' height='100'>";
echo "<table border='1' align='center' bgcolor='#FFCCCC'>";
echo "<tr><td align='center' colspan='2' bgcolor='#FF99CC'><B>แสดงรายละเอียดหนังสือ</B></td></tr>";
echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["TypeID"]."</td></tr>";
echo "<tr><td> สถานะหนังสือ : </td><td>".$data["StatusID"]."</td></tr>";
echo "<tr><td> สำนักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
echo "<tr><td> ราคาซื้อ : </td><td>".$data["UnitPrice"]."</td></tr>";
echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>";
echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
echo "<tr><td> จำนวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
echo "<tr><td> วันที่จัดเก็บหนังสือ : </td><td>".$data["BookDate"]."</td></tr></table>";
?>
<BR>
<div align="center"><A HREF="listofbook.php">กลับหน้าหลัก</A></div><BR>
</BODY>
</HTML>
