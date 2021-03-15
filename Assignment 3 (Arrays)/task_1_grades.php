<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grading</title>
</head>
<body>
<p>পঞ্চম শ্রেণীর ছাত্রছাত্রীদের কিছু ডাটা নিয়ে একটি এরে স্ট্রাকচার তৈরি করুন যেখানে তাদের রেজাল্টের উপরে বেইজ করে জিপিএ এবং গ্রেড সহ প্রকাশ করা হবে , , , রেজাল্ট পাবলিস্ট করার জন্য অবশ্যই একটি রেজাল্ট ফাংসন বানান এবং এই ফাংসন টি ব্যবহার করে রেজাল্ট পাবলিস্ট করুন । ফাইনালি রেজাল্টে সিজিপিএ এবং ফাইরাল গ্রেড পাবলিস্ট করুন</p>
<?php
$students = [
    [
        'name' => 'Fahid Bin Khair Shrabon',
        'age' => 25,
        'phone' => '01589423578',
        'location' => 'Mirpur',
        'marks' => [85, 45, 78, 63, 99, 45]
    ],
    [
        'name' => 'Adrika Rahman',
        'age' => '24',
        'phone' => '01859423458',
        'location' => 'Mohammadpur',
        'marks' => [59, 55, 85, 64, 52, 80]
    ],
    [
        'name' => 'Shahed Mirza',
        'age' => 26,
        'phone' => '01489448546',
        'location' => 'Banani',
        'marks' => [84, 54, 87, 14, 89, 54]
    ],
    [
        'name' => 'Tamim Ikbal',
        'age' => 27,
        'phone' => '01956286485',
        'location' => 'Dhanmondi',
        'marks' => [95, 85, 58, 95, 89, 12]
    ],
    [
        'name' => 'Ummay Kulsum',
        'age' => 27,
        'phone' => '01953256586',
        'location' => 'Mirpur',
        'marks' => [95, 75, 52, 73, 86, 84]
    ],
    [
        'name' => 'Dilruba Khanom',
        'age' => 25,
        'phone' => '01589421518',
        'location' => 'Mirpur',
        'marks' => [45, 65, 18, 73, 59, 75]
    ],
    [
        'name' => 'Mahfuj Ibne Kola',
        'age' => 26,
        'phone' => '01759423515',
        'location' => 'Panthapath',
        'marks' => [85, 85, 78, 63, 99, 35]
    ],
    [
        'name' => 'Piaz Khan',
        'age' => 25,
        'phone' => '01369423578',
        'location' => 'Savar',
        'marks' => [15, 45, 78, 63, 80, 45]
    ],
    [
        'name' => 'Al-Mogir Mia',
        'age' => 25,
        'phone' => '01589423578',
        'location' => 'Mirpur',
        'marks' => [95, 45, 78, 63, 99, 45]
    ],
    [
        'name' => 'Abul Khair',
        'age' => 35,
        'phone' => '01658423578',
        'location' => 'Savar',
        'marks' => [85, 45, 58, 93, 99, 45]
    ],
    [
        'name' => 'Paprika Khatun',
        'age' => 25,
        'phone' => '01897423254',
        'location' => 'Mirpur',
        'marks' => [85, 88, 78, 93, 99, 45]
    ],
    [
        'name' => 'Tata Billa',
        'age' => 52,
        'phone' => '01658923578',
        'location' => 'Mirpur',
        'marks' => [99, 95, 94, 63, 99, 45]
    ],
    [
        'name' => 'Misha Shabbir',
        'age' => 25,
        'phone' => '01458963258',
        'location' => 'Mirpur',
        'marks' => [85, 45, 78, 63, 99, 45]
    ]
];

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


foreach ($students as $student) {

    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Phone: " . $student['phone'] . "<br>";
    echo "Location: " . $student['location'] . "<br>";

    echo "Result list : <br>";
    echo "Bangla: " . $student['marks'][0] . "<br>";
    echo "English: " . $student['marks'][1] . "<br>";
    echo "Math: " . $student['marks'][2] . "<br>";
    echo "Religion: " . $student['marks'][3] . "<br>";
    echo "Science: " . $student['marks'][4] . "<br>";
    echo "Social Science: " . $student['marks'][5] . "<br>";


    $total = 0;

    foreach ($student['marks'] as $mark) {
        $total += $mark;
    }
    echo "Total marks : " . $total . "<br>";

    result($total / 6);

    echo "<hr>";
}
?>

</body>
</html>