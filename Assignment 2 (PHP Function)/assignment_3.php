<?php
// গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন

function result($mark)
{
    $marks = round($mark);

    $grade=0;
    $gpa=0;

    if ($marks >= 0 && $marks <= 32) {
        $grade = "F";
        $gpa = 0;
    } else if ($marks >= 33 && $marks <= 39) {
        $grade = "D";
        $gpa = 1;
    } else if ($marks >= 40 && $marks <= 49) {
        $grade = "C";
        $gpa = 2;
    } else if ($marks >= 50 && $marks <= 59) {
        $grade = "B";
        $gpa = 3;
    } else if ($marks >= 60 && $marks <= 69) {
        $grade = "A-";
        $gpa = 3.5;
    } else if ($marks >= 70 && $marks <= 79) {
        $grade = "A";
        $gpa = 4;
    } else if ($marks >= 80 && $marks <= 100) {
        $grade = "A+";
        $gpa = 5;
    } else {
        $marks = $grade = $gpa = "Invalid Data";

    }

    echo "Your Marks:  $marks <br> Your Grade:  $grade  <br> Your GPA: $gpa";

}

result(69.166666666667);
