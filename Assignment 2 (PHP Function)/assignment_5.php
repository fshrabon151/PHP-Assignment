<?php
// একটি হেডিং ফাংসন বানান যেটা দিয়ে ডাইনামিস হেডিং তৈরি করা যাবে

function myDynamicHead ( string $tag = "h1",string $align="left"){
    echo "<$tag style=\"text-align:$align\">Lorem ipsum dolor<$tag>";
}

myDynamicHead("h2","center");