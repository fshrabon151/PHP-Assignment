<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
</head>
<body>
 <p>একটি ক্লাবের সকল মেমবারদের ডাটা এরেতে নিয়ে বয়সের উপর বেইজ করে ১৮ বছরের বেশি সবাইতে একটি স্বাগত মেসেজ পাঠান এবং ৪০ বছরের বেশি বয়সকতের শুভকামনা মেজে পাঠান , ,, অবশ্যই মেসেজ গুলা একটি ফাংসনের মাধ্যমে পাঠাবেন , , , এবং যাদের বয়স ১৮ এর কম হবে তাদের পরাশোনার দিকে মনযোগী হওয়ার মেসেজ দিন</p>

<?php

function greetings($age, $name){

    if($age >= 40){
        echo "Hey ".$name.", Hope you have a nice day"."<hr>";
      }
      elseif($age >= 18 and $age <40){
        echo "Welcome, ".$name."!<hr>";
      }
      elseif($age >= 0 and $age <18){
        echo "Be attentive to your studies ".$name."<hr>";
      }
      else{
        echo $name.", No entry";
      }

}

$students = [
    [
        'name' => 'Fahid Bin Khair Shrabon',
        'age' => 18
    ],
    [
        'name' => 'Adrika Rahman',
        'age' => 15
    ],
    [
        'name' => 'Shahed Mirza',
        'age' => 26
    ],
    [
        'name' => 'Tamim Ikbal',
        'age' => 27
    ],
    [
        'name' => 'Ummay Kulsum',
        'age' =>55
    ],
    [
        'name' => 'Dilruba Khanom',
        'age' => 4
    ],
    [
        'name' => 'Mahfuj Ibne Kola',
        'age' => 35
    ],
    [
        'name' => 'Piaz Khan',
        'age' => 39
    ],
    [
        'name' => 'Al-Mogir Mia',
        'age' => 41
    ],
    [
        'name' => 'Abul Khair',
        'age' => 35
    ],
    [
        'name' => 'Paprika Khatun',
        'age' => 25
    ],
    [
        'name' => 'Tata Billa',
        'age' => 52
    ],
    [
        'name' => 'Misha Shabbir',
        'age' => 14
    ]
];

foreach($students as $student){
    greetings($student['age'], $student['name']);
}


?>
    
</body>
</html>