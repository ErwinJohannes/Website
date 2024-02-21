<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("ไม่สามารถเชื่อมต่อกับ MySQL ได้: " . mysqli_connect_error());
}

// ตั้งค่า charset เป็น UTF-8 สำหรับการส่งคำสั่ง SQL
mysqli_set_charset($conn, 'utf8');

// เลือกประเภทหนังสือ
function GetTypeSelect($TypeID)
{
    global $conn;
    $sql = "SELECT * FROM typebook ORDER BY TypeID";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("(FunctionDB:GetTypeSelect) SELECT typebook มีข้อผิดพลาด: " . mysqli_error($conn));
    }
    echo "<option value=\"\">เลือกประเภทหนังสือ</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        $selected = ($row['TypeID'] == $TypeID) ? "selected" : "";
        echo "<option value=\"" . $row['TypeID'] . "\" $selected>" . $row['TypeName'] . "</option>\n";
    }
}

// ฟังก์ชั่นแสดงสถานะ
function GetStatusSelect($StatusID)
{
    global $conn;
    $sql = "SELECT * FROM statusbook ORDER BY StatusID";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("(FunctionDB:GetStatusSelect) SELECT status มีข้อผิดพลาด: " . mysqli_error($conn));
    }
    echo "<option value=\"\">เลือกสถานะ</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        $selected = ($row['StatusID'] == $StatusID) ? "selected" : "";
        echo "<option value=\"" . $row['StatusID'] . "\" $selected>" . $row['StatusName'] . "</option>\n";
    }
}
?>
<html>
<head>
    <title>เพิ่มข้อมูลหนังสือ</title>
    <meta charset="UTF-8">
</head>
<body>
<form enctype="multipart/form-data" name="save" method="post" action="savebook.php">
    <BR><BR>
    <table width="650" border="1" bgcolor="#FFFFFF" align="center">
        <tr>
            <td colspan="6" bgcolor="#3399CC" align="center" height="21">
                <b>: : เพิ่มข้อมูลหนังสือ : :</td>
        </tr>
        <tr>
            <td width="200">รหัสหนังสือ :</td>
            <td width="400"><input type="text" name="BookID" size="10" maxlength="5"></td>
        </tr>
        <tr>
            <td width="200">ชื่อหนังสือ :</td>
            <td><input type="text" name="BookName" size="50" maxlength="50"></td>
        </tr>
        <tr>
            <td width="200">ประเภทหนังสือ :</td>
            <td><select name="TypeID"><?php GetTypeSelect(''); ?></select></td>
        </tr>
        <tr>
            <td width="200">สถานะหนังสือ :</td>
            <td><select name="StatusID"><?php GetStatusSelect(''); ?></select></td>
        </tr>
        <tr>
            <td width="200">สำนักพิมพ์ :</td>
            <td><input type="text" name="Publish" maxlength="25" size="20"></td>
        </tr>
        <tr>
            <td width="200">ราคาที่ซื้อ :</td>
            <td><input type="text" name="UnitPrice" maxlength="25" size="20"></td>
        </tr>
        <tr>
            <td width="200">ราคาที่เช่า :</td>
            <td><input type="text" name="UnitRent" size="20" maxlength="25"></td>
        </tr>
        <tr>
            <td width="200">จำนวนวันที่เช่า :</td>
            <td><input type="text" name="DayAmount" maxlength="25" size="20"></td>
        </tr>
        <tr>
            <td width="200">รูปภาพ :</td>
            <td>
                <input type="hidden" name="max_size" value="50000">
                <input type="file" name="ImageFile" size="30">
                <BR> <font size=2 color=#FF3300>นามสกุล .gif หรือ .jpg (เท่านั้น)</font></td>
        </tr>
    </table>
    <BR>
    <div align="center">
        <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
        <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>
</form>
</body>
</html>
