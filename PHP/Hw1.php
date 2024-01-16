<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop and Sum Example</title>
</head>
<body>
    <form method="post" action="">
        Number 1 (Start)
        <input type="text" name="number1" size="15" value=""><br>
        Number 2 (Stop)
        <input type="text" name="number2" size="15" value=""><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if (is_numeric($number1) && is_numeric($number2)) {
            $sum = 0;

            for ($i = $number1; $i <= $number2; $i++) {
                $sum += $i;
                echo $i . "<br>";
            }

            echo "Sum: " . $sum;
        } 
    }
    ?>
</body>
</html>