<form action="" method="POST">
    <label for="">Enter your label</label> <br>
   <input type="text" name="user" id="user">
   <input type="submit" value="submit" name="submit_btn">
</form>

<?php

// Create User Membership Level with switch case
if (isset($_REQUEST['submit_btn'])) {

    $user = $_POST["user"];

    switch ($user) {

        case 0:
            echo "You Have Become A Bronze Member";
            break;

        case 3:
            echo "You Have Become A Silver Member";
            break;

        case 6:
            echo "You Have Become A Gold Member";
            break;

        case 9:
            echo "You Have Become A Crystal Member";
            break;

        case 10:
            echo "You Have Become A Diamond Member";
            break;

        case ($user > 10 || $user < 0):
            echo "Invalid User";
            break;

        default:
            echo "Keep trying, you are getting very close to your achievement";
    }
}

?>




