<?php
// বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান
function boroHat($text){
    echo "<span style=\"text-transform:uppercase\">$text</span>";
}

function chotoHat($text){
    echo "<span style=\"text-transform:lowercase\">$text</span>";
}
function bothHat($text){
    echo "<span style=\"text-transform:capitalize\">$text</span>";
}

boroHat("What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?");

echo "<br><br><br><br>";

chotoHat("What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?");

echo "<br><br><br><br>";

bothHat("What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?");