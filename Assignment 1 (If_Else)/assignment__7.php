<?php
//- ফর লুপ ব্যবহার করে এমন একটা লুপ তৈরি করুন যা কি না প্রতি ধাপে ৩ করে ইনক্রিমেন্ট হবে এবং লুগপটি ১১ দ্বারা বিভাজ্য কোন সংখ্য পেলে অটো লুপ ব্রেক করে দিবে ( লুপ শেষ করে দিবে )
for ($i = 1; $i <= 500; $i += 3) {
        echo "$i <br>";
     if ($i % 11 == 0) {
        echo "Exiting from Loop <br>";
        break;
    }
}
