<form action="" method="POST">
    <label for="">Enter your Name</label> <br>
   <input type="text" name="name" id="name" require><br>
   <label for="">Enter your marks</label> <br>

   <input type="text" name="mark" id="mark" require>
   <input type="submit" value="submit" name="submit_btn">
</form>

<?php
// - রেজাল্টের উপরে ভিত্তিকরে একজন স্টডেন্টকে শুভেচ্ছা মেজে অথবা দুঃখ প্রকাশ মেসেজ প্রদান করুন সাথে ভাইয়া এবংআপুদের আলাদা সম্ভাসন জানান

if (isset($_REQUEST['submit_btn'])) {

    $name = $_POST["name"];
    $mark = $_POST["mark"];

    switch ($name) {
        case "Aditi":
        case "Nadia":
        case "Suraiya":
        case "Farah":
            $songbordhona = "আপু";
            break;
        default:
            $songbordhona = "ভাই";
    }

    if ($mark >= 39 && $mark <= 100) {
        echo "$name $songbordhona, আপনি পাশ করেছেন, এইবার বিকাশে ট্রিট দেন!";
    } else if ($mark > 100) {
        echo "$songbordhona....$songbordhona....$songbordhona....,কেম্নে পারলেন?? এই বিদ্যা আপ্নে কই হিগলেন";

    } else {
        echo "$name $songbordhona, আপনি ফেল মারছেন, আপনারে $songbordhona ভাবতে আমার লজ্জা লাগে ";
    }
}
