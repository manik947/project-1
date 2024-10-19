<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
    }

    foreach ($marks as $mark) {
        if ($mark < 33) {
            return "The student has failed.";
        }
    }

    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    if ($averageMarks >= 80 && $averageMarks <= 100) {
        $grade = "A+";
    } elseif ($averageMarks >= 70 && $averageMarks <= 79) {
        $grade = "A";
    } elseif ($averageMarks >= 60 && $averageMarks <= 69) {
        $grade = "A-";
    } elseif ($averageMarks >= 50 && $averageMarks <= 59) {
        $grade = "B";
    } elseif ($averageMarks >= 40 && $averageMarks <= 49) {
        $grade = "C";
    } elseif ($averageMarks >= 33 && $averageMarks <= 39) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    return "Total Marks: $totalMarks\nAverage Marks: " . number_format($averageMarks, 1) . "\nGrade: $grade";
}

$marks = [45, 40, 50, 47, 50];

echo calculateResult($marks);

