<?php
session_start();
echo "ชื่อผู้ใช้ของคุณยังคงเป็น " . $_SESSION['username'];
?>
<br><br><a href="file1.php">คลิกตรงนี้เพื่อไปยังไฟล์ file1.php</a>