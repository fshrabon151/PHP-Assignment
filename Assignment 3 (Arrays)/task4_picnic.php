<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picnic cash collection</title>
</head>
<body>
<p>একটি বনভোজনের জন্য চাদার এরে ডাটা তৈরি করুন যেখানে সবাই সবার বেসিক ইনফরমেসন সহ চাদা প্রদান করবে ইচ্ছামতন , , , ফাইনালি মোট চাদার পরিমান বের করুন</p>
<?php
// 


$list= [
    [
        'name' => 'Kalam',
        'number' => '01956823586',
        'money' => 500
    ],
    [
        'name' => 'Masum',
        'number' => '01658259456',
        'money' => 350
    ],
    [
        'name' => 'Ruma',
        'number' => '01456823515',
        'money' => 450
    ],
    [
        'name' => 'Tumpa',
        'number' => '01756823586',
        'money' => 400
    ],
    [
        'name' => 'Shapla',
        'number' => '019568237007',
        'money' => 356
    ],
    [
        'name' => 'Shrabon',
        'number' => '01956823135',
        'money' => 852
    ],
    [
        'name' => 'Mahfuj',
        'number' => '01956823007',
        'money' => 1000
    ],
    [
        'name' => 'Ashraful',
        'number' => '01756828956',
        'money' => 454
    ],
    [
        'name' => 'Shorif',
        'number' => '01856827821',
        'money' => 550
    ],
    [
        'name' => 'Rafi',
        'number' => '01856823555',
        'money' => 565
    ],
    [
        'name' => 'Kabir',
        'number' => '01956823528',
        'money' => 450
    ],
    [
        'name' => 'Deloyar',
        'number' => '01956825481',
        'money' => 420
    ],
    [
        'name' => 'Shahed',
        'number' => '01956822585',
        'money' => 356
    ],
    [
        'name' => 'Kolama',
        'number' => '01956822151',
        'money' => 450
    ],
    [
        'name' => 'Mofiz',
        'number' => '01956823852',
        'money' => 456
    ],
    [
        'name' => 'Tata Billa',
        'number' => '01956824896',
        'money' => 120
    ],
    [
        'name' => 'Kulsum',
        'number' => '01956823595',
        'money' => 50
    ],
    [
        'name' => 'Zooel',
        'number' => '01956823123',
        'money' => 700
    ]
];

$count=0;

foreach($list as $data){
$count+=1;
    echo  "<hr> " .$count. " => <br>Name : " .$data['name'] ." <br> Number :" . $data['number'] . "<br>Amount : ". $data['money'] . "<hr>";
}

$cal = 0;

foreach($list as $total){

$cal+=$total['money'];

}
echo "Total : ". $cal;
?>
    
</body>
</html>