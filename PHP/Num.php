<!DOCTYPE html>
<html>
<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .total {
            font-weight: bold;
        }
        caption {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <table>
        <caption>Score Report</caption>
        <thead>
            <tr>
                <th>Student</th>
                <th>Homework</th>
                <th>Assignment</th>
                <th>Midterm</th>
                <th>Final</th>
                <th>Total Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $maxRow = 10;
            $maxCol = 1;
            $score = array(); // Initialize the array

            for ($r = 0; $r < $maxRow; $r++) {
                for ($c = 0; $c < $maxCol; $c++) {
                    $score[$r][$c]['Homework'] = rand(0, 10);
                    $score[$r][$c]['Assignment'] = rand(0, 20);
                    $score[$r][$c]['Midterm'] = rand(0, 35);
                    $score[$r][$c]['Final'] = rand(0, 35);
                }
            }

            for ($r = 0; $r < $maxRow; $r++) {
                echo "<tr>"; // Open a new row for each student
                $std = $r + 1;
                echo "<td>$std</td>";

                for ($c = 0; $c < $maxCol; $c++) {
                    echo "<td>" . $score[$r][$c]['Homework'] . "</td>";
                    echo "<td>" . $score[$r][$c]['Assignment'] . "</td>";
                    echo "<td>" . $score[$r][$c]['Midterm'] . "</td>";
                    echo "<td>" . $score[$r][$c]['Final'] . "</td>";

                    // Calculate total score for each student
                    $totalScore = $score[$r][$c]['Homework'] + $score[$r][$c]['Assignment'] + $score[$r][$c]['Midterm'] + $score[$r][$c]['Final'];
                    echo "<td class='total'>$totalScore</td>";
                }
                echo "</tr>"; // Close the row
            }
            ?>
        </tbody>
    </table>
</body>
</html>
