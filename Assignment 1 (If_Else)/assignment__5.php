<?php
// - একটি লুপ তেরি করুন যেখানে ইনিশিয়াল ভেলু ১০০০০। আপনাকে লুপটা ৫০ বার ঘুরাতে হবে এবং ইনক্রিমেন্ট ও ডিক্রিমেন্ট অপারেটর ইউজ করে ২ বার করবেন
echo "Increment<br>";
$val=10000;
$increment=1;
for($val;$val<10050;$val++){
    echo $increment."<hr>";
    $increment++;
}

echo "Decrement<br>";


$val=10000;
$decrement=1;
for($val;$val>9950;$val--){
    echo $decrement."<hr>";
    $decrement++;
}