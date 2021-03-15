<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Location Data</title>
</head>
<body>
<p> একটি স্টুডেন্ট এরে ডাটা দৈরি করুন যেখানে প্রায় ২০ জন এর ডাটা থাকবে এবং সেখানে থেকে শুরু মিরপুরের এবং বনানীর বাসিন্দাদের ডাটা প্রিন্ট করুন</p>
<?php

$students = [
    [
        'name' => 'Shrabon',
        'location' => 'Mirpur',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Rony',
        'location' => 'Banani',
        'age' => 25,
        'gender' => 'Male'
    ],
    [
        'name' => 'Mahid',
        'location' => 'Mirpur',
        'age' => 65,
        'gender' => 'Male'
    ],
    [
        'name' => 'Lota',
        'location' => 'Banani',
        'age' => 35,
        'gender' => 'Female'
    ],
    [
        'name' => 'Moumita',
        'location' => 'Dhanmondi',
        'age' => 35,
        'gender' => 'Female'
    ],
    [
        'name' => 'Kalam',
        'location' => 'Mirpur',
        'age' => 45,
        'gender' => 'Male'
    ],
    [
        'name' => 'Malek',
        'location' => 'Banani',
        'age' => 25,
        'gender' => 'Male'
    ],
    [
        'name' => 'Kulsum',
        'location' => 'Banani',
        'age' => 20,
        'gender' => 'Female'
    ],
    [
        'name' => 'Mim',
        'location' => 'Kolabagan',
        'age' => 35,
        'gender' => 'Female'
    ],
    [
        'name' => 'Roton',
        'location' => 'Agargaon',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Habib',
        'location' => 'Panthapath',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Johir',
        'location' => 'Shamoly',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Kabir',
        'location' => 'Zigatola',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Rafi',
        'location' => 'Mirpur',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Shorif',
        'location' => 'Mirpur',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Kamal',
        'location' => 'Banani',
        'age' => 35,
        'gender' => 'Male'
    ],
    [
        'name' => 'Golam',
        'location' => 'Kollanpur',
        'age' => 35,
        'gender' => 'Male'
    ]
];

foreach($students as $student){
    if($student['location']=='Mirpur' || $student['location']=='Banani'){
        echo "Name : " . $student['name'] ."<br>";
        echo "Location : " . $student['location'] ."<br>";
        echo "Age : " . $student['age'] ."<br>";
        echo "Gender : " . $student['gender'] ."<br>";
        echo "<hr>";
    }
}
?>
</body>
</html>