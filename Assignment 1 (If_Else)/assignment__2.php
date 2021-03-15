<form action="" method="POST">
    <label for="">Enter your age</label> <br>
   <input type="text" name="userAge" id="userAge">
   <input type="submit" value="submit" name="submit_btn">
</form>
<?php
//- বয়স এর উপরে ভিত্তি করে একটি ইউজার একসেস প্রোগ্রাম রেডি করুন যেখানে ২০ থেকে ৩৫ বছরের সবাই একসেস পাবে

if (isset($_REQUEST['submit_btn'])) {

    $userAge = $_POST["userAge"];

    if ($userAge >= 20 && $userAge <= 35) {
        echo "You Are Welcome";
    } else {
        echo "Access Deny, Invalid Age Range";
    }
}
