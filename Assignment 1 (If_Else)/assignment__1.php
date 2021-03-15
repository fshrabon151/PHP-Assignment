<form action="" method="POST">
    <label for="">Enter your Marks</label> <br>
   <input type="text" name="marks" id="marks">
   <input type="submit" value="submit" name="submit_btn">
</form>
<?php

// - রেজাল্ট সিসটেম রেডি করুন যেখানে গ্রেড এন্ড জিপিএ তে রেজাল্ট পাওয়া যাবে

if (isset($_REQUEST['submit_btn'])) {

    $marks = $_POST["marks"];

    if ($marks >= 0 && $marks <= 32) {

        echo "Your Marks:  $marks <br> Your Grade: F  <br> Your GPA: 0";

    } else if ($marks >= 33 && $marks <= 39) {

        echo "Your Marks:  $marks <br> Your Grade: D  <br> Your GPA: 1";

    } else if ($marks >= 40 && $marks <= 49) {

        echo "Your Marks:  $marks <br> Your Grade: C  <br> Your GPA: 2";

    } else if ($marks >= 50 && $marks <= 59) {

        echo "Your Marks:  $marks <br> Your Grade: B  <br> Your GPA: 3";

    } else if ($marks >= 60 && $marks <= 69) {

        echo "Your Marks:  $marks <br> Your Grade: A-  <br> Your GPA: 3.5";

    } else if ($marks >= 70 && $marks <= 79) {

        echo "Your Marks:  $marks <br> Your Grade: A  <br> Your GPA: 4";

    } else if ($marks >= 80 && $marks <= 100) {

        echo "Your Marks:  $marks <br> Your Grade: A+  <br> Your GPA: 5";

    } else {
        echo "$marks is invalid";
    }
}
