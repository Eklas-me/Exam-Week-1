<?php
function calculateStudentResult($marks) {
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid. Please enter marks between 0 and 100.";
        }
    }

    
    foreach ($marks as $mark) {
        if ($mark < 33) {
            return "Failed: You scored below 33 in one or more subjects.";
        }
    }


    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Assign grade based on average marks
    $grade = "";
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

// Example usage:
$studentMarks = [85, 76, 65, 56, 44,41, 67,89,76,47,83,74,90,99,53,]; 
$result = calculateStudentResult($studentMarks);
echo nl2br($result);  
?>