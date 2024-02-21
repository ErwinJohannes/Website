<?php
$max_size = 50000; // กำหนดขนาดสูงสุดของไฟล์ที่อัปโหลด (ในไบต์)

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("ไม่สามารถติดต่อกับ MySQL ได้: " . mysqli_connect_error());
}



$Flag = true;
$ImageFile_name = $_FILES['ImageFile']['name'];
$ImageFile_type = $_FILES['ImageFile']['type'];
$ImageFile_size = $_FILES['ImageFile']['size'];
$ImageFile_tmp = $_FILES['ImageFile']['tmp_name'];



if ($Flag) {
    $BookID = $_POST['BookID'];
    $BookName = $_POST['BookName'];
    $TypeID = $_POST['TypeID'];
    $StatusID = $_POST['StatusID'];
    $Publish = $_POST['Publish'];
    $UnitPrice = $_POST['UnitPrice'];
    $UnitRent = $_POST['UnitRent'];
    $DayAmount = $_POST['DayAmount'];
    $BDate = date("Y-m-d");

    $sql = "INSERT INTO book (BookID, BookName, TypeID, StatusID, Publish, UnitPrice, UnitRent, DayAmount, Picture, BookDate) VALUES ('$BookID', '$BookName', '$TypeID', '$StatusID', '$Publish', '$UnitPrice', '$UnitRent', '$DayAmount', '$image', '$BDate')";
    if (mysqli_query($conn, $sql)) {
        echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
        echo "<CENTER><A HREF=\"listofbook.php\">แสดงข้อมูลทั้งหมด</A></CENTER>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
