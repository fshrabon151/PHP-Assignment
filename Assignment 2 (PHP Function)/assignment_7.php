<?php
// বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান

function currencyConveter($bdt){
    echo "$bdt BDT = " . $bdt*0.012  . " USD <br>";
    echo "$bdt BDT = " . $bdt*0.015   . " CAD <br>";
    echo "$bdt BDT = " . $bdt*0.0086   . " GBP <br>";
}

currencyConveter(100);