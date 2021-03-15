<?php
// এমন একটি ফাংসন বানান যেখানে আপনার ওজন আর উচ্চা দিলে আপনার বডি ম্যাস ইন্ডেক্স বের করে দিব

function bmi($mass,$height){
    $bmi=($mass/ (pow(($height*0.3048),2)));

    if($bmi<16.5){
        echo "Your BMI score is $bmi <br> You are Severely Underweight body";
    }else if($bmi>=16.5 && $bmi<= 18.4){
        echo "Your BMI score is $bmi <br> You are Underweight body";

    }else if($bmi>=18.5 && $bmi<= 24.9){
        echo "Your BMI score is $bmi <br> You are Normal body";

    }else if($bmi>=25 && $bmi<= 30){
        echo "Your BMI score is $bmi <br> You are Overweight body";

    }else if($bmi>= 30.1 && $bmi<= 34.9){
        echo "Your BMI score is $bmi <br> You are Obesity (Class I) body";

    }else if($bmi>= 35 && $bmi<= 40){
        echo "Your BMI score is $bmi <br> You are Obesity (Class II) body";

    }else if($bmi> 40) {
        echo "Your BMI score is $bmi <br> You are (Class III) body";

    }

}

bmi(51,5.4);