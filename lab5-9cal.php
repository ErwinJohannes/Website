<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operator = $_GET['operator'];
if ($operator == "Tri"){
echo "<p>";
echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
echo "ความยาวฐาน : <i> $number1 </i> <br/>";
echo "ความสูง : <i> $number2 </i> <br/>";
echo "ผลลัพธ์ : <i> ";
}
if ($operator == "Rect"){
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    echo "ความยาว : <i> $number1 </i> <br/>";
    echo "ความกว้าง : <i> $number2 </i> <br/>";
    echo "ผลลัพธ์ : <i> ";
}
if ($operator == "Rect"){
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    echo "ความยาว : <i> $number1 </i> <br/>";
    echo "ความกว้าง : <i> $number2 </i> <br/>";
    echo "ผลลัพธ์ : <i> ";
}
if ($operator == "Circle"){
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    echo "ความกว้าง : <i> $number1 </i> <br/>";
    echo "ความรัศมี : <i> $number2 </i> <br/>";
    echo "ผลลัพธ์ : <i> ";
}



    


if ($operator == "Rect")echo ($number1 * $number2) ." </i> <br/>";
if ($operator == "Tri") echo (0.5* $number1 * $number2) ." </i> <br/>";
if ($operator == "Circle")echo (3.14* $number1 * $number1) ." </i> <br/>";

?>
</body>
</html>