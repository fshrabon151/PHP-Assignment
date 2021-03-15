<?php
// এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে, বাচ্ছা রিটান করবে

function generation($age)
{

    if ($age <= 0) {
        return "ভুল করছেন";
    } else if ($age >= 1 && $age <= 10) {
        return "বাচ্চা";
    } else if ($age >= 11 && $age <= 20) {
        return "ছেলে";

    } else if ($age >= 21 && $age <= 30) {
        return "কিশোর";

    } else if ($age >= 31 && $age <= 40) {
        return "যুবক";

    }else{
        return "বৃদ্ধ";
    }
}

echo generation(100);
