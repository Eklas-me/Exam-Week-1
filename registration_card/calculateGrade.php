<?php
// Function to calculate grade based on marks
function calculateGrade($marks) {
    switch (true) {
        case ($marks >= 80 && $marks <= 100):
            return 'A+';
        case ($marks >= 70 && $marks <= 79):
            return 'A';
        case ($marks >= 60 && $marks <= 69):
            return 'A-';
        case ($marks >= 50 && $marks <= 59):
            return 'B';
        case ($marks >= 40 && $marks <= 49):
            return 'C';
        case ($marks >= 33 && $marks <= 39):
            return 'D';
        case ($marks < 33):
            return 'F';
        default:
            return 'Invalid Marks';
    }
}

$student_marks = 33; 
$grade = calculateGrade($student_marks);
echo "Student Marks: $student_marks <br>";
echo "Grade: $grade";