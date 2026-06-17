<?php
    const INSTITUTION_NAME = "Marwadi University";
    const SEMESTER = "4th Semester";

    $studentName = "shubham adesara";
    $studentEnrollmentNumber = "92400527016";
    $course1Name = "Python";
    $course1Grade = "O";
    $course2Name = "Computer Network";
    $course2Grade = "A+";
    $course3Name = "Operating System";
    $course3Grade = "A+";
    $gpa = 8.28;
    $academicStatus = "Passed";

    echo "<center>";
    echo "========================================<br>";
    echo "<strong>" . INSTITUTION_NAME . "</strong><br>";
    echo "<strong>PREVIOUS SEMESTER RESULT SHEET</strong><br>";
    echo "<strong>" . SEMESTER . "</strong><br>";
    echo "========================================<br>";
    echo "Student Name : $studentName<br>";
    echo "Student Enrollment Number : $studentEnrollmentNumber<br>";
    echo "----------------------------------------<br>";
    echo "<strong>Subject | Grade</strong><br>";
    echo "----------------------------------------<br>";
    echo "$course1Name : $course1Grade<br>";
    echo "$course2Name : $course2Grade<br>";
    echo "$course3Name : $course3Grade<br>";
    echo "----------------------------------------<br>";
    echo "<strong>Semester GPA : $gpa</strong><br>";
    echo "<strong>Status : $academicStatus</strong><br>";
    echo "========================================<br>";
    echo "</center>";
?>
