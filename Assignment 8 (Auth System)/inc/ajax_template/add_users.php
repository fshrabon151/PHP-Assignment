<?php


include_once '../../autoload.php';

//Get al user data

$name =  $_POST['name'];
$email =  $_POST['email'];
$username =  $_POST['username'];
$cell =  $_POST['cell'];
$password =  $_POST['password'];





//make password hash
$hash_pass = password_hash($password, PASSWORD_DEFAULT);

//Upload user photo

$file = move($_FILES['photo'], '../../photos/users/');

$file_name = $file['unique_name'];

if (empty($file['err_msg'])) {

    $sql = "INSERT INTO users (name,email,username,cell,password,photo) VALUES ('$name','$email','$username','$cell','$hash_pass','$file_name')";

    if (mysqli_query(connect(), $sql)) {
        echo "";
    } else {
        unlink("../../photos/users/$file_name");
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} else {
    echo $file['err_msg'];
}
