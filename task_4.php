<?php

/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/

$studentGrades = [
  [
    'Math' => 90,
    'English' => 82,
    'Science' => 89
  ],

  [
    'Math' => 76,
    'English' => 68,
    'Science' => 45
  ],

  [
    'Math' => 98,
    'English' => 92,
    'Science' => 86
  ]
];

function calculateStudentGrades($grades)
{
  foreach ($grades as $arrayIndex => $student) {
    $totalGrades = array_sum($student);
    $numSubjects = count($student);
    $averageGrade = $totalGrades / $numSubjects;

    echo "Average grade is: {$averageGrade}\n";
  }
}

calculateStudentGrades($studentGrades);
