<?php
// একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান
function headColor($color){

    if($color=="লাল"){
        echo "<h1 style=\"color:red\">Lorem ipsum dolor</h1>";
    }else if($color=="সবুজ"){
        echo "<h1 style=\"color:green\">Lorem ipsum dolor</h1>";
    }else if($color=="নিল"){
        echo "<h1 style=\"color:blue\">Lorem ipsum dolor</h1>";
    }else if($color=="হলুদ"){
        echo "<h1 style=\"color:yellow\">Lorem ipsum dolor</h1>";
    }else if($color=="বেগুনি"){
        echo "<h1 style=\"color:violet\">Lorem ipsum dolor</h1>";
    }else if($color=="কাল"){
        echo "<h1 style=\"color:black\">Lorem ipsum dolor</h1>";
    }

}

headColor("কাল");