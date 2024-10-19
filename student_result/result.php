<?php
// Function to calculate total, average, and grade
function calculateResult($marks) {
    // Mark range validation for each subject
    foreach ($marks as $subject => $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid for $subject. Please enter marks between 0 and 100.<br>";
            return;
        }
    }

    // Check if the student has failed in any subject
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed.<br>";
            return;
        }
    }

    // Calculate total and average marks
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Determine the grade using switch-case
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = 'A';
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = 'B';
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = 'C';
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output the result
    echo "Total Marks: $totalMarks";
    echo "Average Marks: $averageMarks";
    echo "Grade: $grade";
}

// Marks for five subjects that will result in a total of 232 and an average of 46.4
$marks = [
    'Subject1' => 40,
    'Subject2' => 45,
    'Subject3' => 50,
    'Subject4' => 48,
    'Subject5' => 49,
];

// Call the function to calculate the result
calculateResult($marks);
?>
