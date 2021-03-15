<?php
// এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে

function ayotokhetro($height, $width){
    echo $height*$width ."<br>";
}

function borgokhetro($hand){

    echo $hand*$hand ."<br>";

}

function britterKhetrerkhetrofol($radius){
    echo 3.14159*pow($radius,2);

}

ayotokhetro(15,58);
borgokhetro(56);
britterKhetrerkhetrofol(54);