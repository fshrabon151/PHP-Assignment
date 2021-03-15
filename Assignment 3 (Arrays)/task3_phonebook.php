<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Phonebook</title>
</head>
<body>
<p>একটি পারিবারিক ফোন বুকের জন্য এরে ডাটা শিট দৈরি করুন এবং সেটাকে পাবলিস্ট করুন</p>
<?php

// 

$list= [
    [
        'name' => 'Kalam',
        'number' => '01956823586'
    ],
    [
        'name' => 'Masum',
        'number' => '01658259456'
    ],
    [
        'name' => 'Ruma',
        'number' => '01456823515'
    ],
    [
        'name' => 'Tumpa',
        'number' => '01756823586'
    ],
    [
        'name' => 'Shapla',
        'number' => '019568237007'
    ],
    [
        'name' => 'Shrabon',
        'number' => '01956823135'
    ],
    [
        'name' => 'Mahfuj',
        'number' => '01956823007'
    ],
    [
        'name' => 'Ashraful',
        'number' => '01756828956'
    ],
    [
        'name' => 'Shorif',
        'number' => '01856827821'
    ],
    [
        'name' => 'Rafi',
        'number' => '01856823555'
    ],
    [
        'name' => 'Kabir',
        'number' => '01956823528'
    ],
    [
        'name' => 'Deloyar',
        'number' => '01956825481'
    ],
    [
        'name' => 'Shahed',
        'number' => '01956822585'
    ],
    [
        'name' => 'Kolama',
        'number' => '01956822151'
    ],
    [
        'name' => 'Mofiz',
        'number' => '01956823852'
    ],
    [
        'name' => 'Tata Billa',
        'number' => '01956824896'
    ],
    [
        'name' => 'Kulsum',
        'number' => '01956823595'
    ],
    [
        'name' => 'Zooel',
        'number' => '01956823123'
    ]
];

$count=0;

foreach($list as $data){
$count+=1;
    echo  "<hr>" .$count. " => " .$data['name'] ." : " . $data['number'] . "<hr>";
}
?>
    
</body>
</html>