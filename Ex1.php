<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountainnn</title>
    <h2><center> ผลลัพธ์ของการรันโปรแกรม </center></h2>
</head>
<body>
    <?php
    $str='*';
    $row = 8;

    for($i = 1; $i <= $row; $i++) {
        echo"Row" ,$i;
        for ($j = 0; $j < $i;$j++) {
            echo '<span style = "color : green;" >' .$str.'</span>';
        }
        echo "<br/>";
    }
    ?>
</body>
</html>