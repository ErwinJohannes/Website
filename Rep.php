<!DOCTYPE html>
<html>
<head>
    <title>Grade Report</title>
</head>
<body>
<?php
$MaxStudent = 10;
for ($n = 0; $n < $MaxStudent; $n++) {
    $score[$n] = rand(50, 100);
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td><td align="center" width="90">Score</td><td align="center" width="90">Grade</td></tr>';
for ($n = 0; $n < $MaxStudent; $n++) {
    $grade = calculateGrade($score[$n]);
    echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    echo '<td align="center" width="90">' . $grade . '</td></tr>';
}
echo '<tr><td colspan="3" align="center"> Average Score : ';
echo average($score, $MaxStudent);
echo '</td></tr></table>';

function calculateGrade($score) {
    if ($score >= 80) {
        return 'A';
    } elseif ($score >= 75) {
        return 'B+';
    } elseif ($score >= 70) {
        return 'B';
    } elseif ($score >= 65) {
        return 'C+';
    } elseif ($score >= 60) {
        return 'C';
    } elseif ($score >= 55) {
        return 'D+';
    } else {
        return 'D'; 
    }
}

function average($data, $max) {
    $total = 0;
    for ($n = 0; $n < $max; $n++) {
        $total += $data[$n];
    }
    return ($total / $max);
}
?>
</body>
</html>
