<?php
// এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে
function ageCalc($birth_age){
    echo DATE("Y")-$birth_age;
}
ageCalc(2020);