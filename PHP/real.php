<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เว็บแนะนำตัว</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, p {
            text-align: center;
        }
    </style>
</head>

<style>
    body {background-image: url('pp.jpg');
background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100% ;
  background-position: center center;
}
</style>


<header>
    <h1><font color='white'>เว็บแนะนำตัว</fonts></h1>
</header>
<center><img src="Ball.jpg" width="300" height="400"></center>


<body>


<?php
// ข้อมูลส่วนตัว
$ชื่อ = "อดิเทพ ทูคำมี";
$อายุ = 19;
$อาชีพ = "นักศึกษา";
$สิ่งที่ชอบ = ["เล่นเกม", "ฟังพ็อตแคส", "ดูหนัง"];
$ชื่อเล่น = "บอล";
$เกิด ="3 มีนาคม 2547";
$เบอ = "097-2835216";
$เมล = "adithep817@gmail.com";

echo "<center><p><font color='white'>ชื่อ - นามสกุล = $ชื่อ  &nbsp;
ชื่อเล่น :$ชื่อเล่น <br>
เบอร์ติดต่อ : $เบอ <br>
เกิดวันที่ :$เกิด <br>
เมลติดต่อ :$เมล </center></p>
</font>";


?>


<footer>
    <p>&copy; <?php echo date("Y"); ?> เว็บแนะนำตัว</p>
</footer>



</body>
</html>
