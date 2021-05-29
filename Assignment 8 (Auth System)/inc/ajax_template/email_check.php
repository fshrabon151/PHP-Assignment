<?php

include "../../autoload.php";

$email = $_POST['email'];


// $data = dataCheck('users', 'email',  $email);


// if ($data == true) {
//     echo "Email already exists !";
// }


userCheck('users', 'email', $email, $email);
