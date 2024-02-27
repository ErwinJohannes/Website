<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// เชื่อมต่อกับ MySQL
$conn = new mysqli($hostname, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับค่า id จาก URL
$id = $_GET['id'];

// สร้างคำสั่ง SQL DELETE
$sql = "DELETE FROM book WHERE BookID = '$id'";

// ทำการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// ปิดการเชื่อมต่อ
$conn->close();
?>

