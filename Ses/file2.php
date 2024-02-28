<?php
session_start();
$username = $_GET['username'];
$_SESSION['username']=$username;
?>
ชื่อผู้ใช้ที่คุณป้อนมาให้คือ
<?php
echo $_SESSION['username'];
?>
<br><br><a href="file3.php">คลิกตรงนี้เพื่อไปยังไฟล์ file3.php</a>